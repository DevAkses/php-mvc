<?php 

    class App {

        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        public function __construct() 
        {
            $url = $this->parseURL(); 
            if( !empty($url[0]) && file_exists( '../app/controllers/' . $url[0] . '.php' ) ) 
            {
                $this->controller = $url[0];
                unset($url[0]);
                // var_dump($url);
            } 

            require_once( '../app/controllers/'. $this->controller . '.php');
            $this->controller = new $this->controller;

            //method
            if (isset($url[1])) 
            {
                if( method_exists($this->controller, $url[1]) ) {
                    $this->method = $url[1];
                    unset($url[1]); 
                    
                }
            }

            //params 
            if( !empty($url)) 
            {
                $this->params = array_values($url);
            }

            // jalankan controller & dan method, serta kirimkan params jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);

        }

        public function parseURL()
        {
            $url = [null, null, null];
            if (isset($_GET["controller"])) {
                $url[0] = $_GET["controller"];
            }
            if (isset($_GET["method"])) {
                $url[1] = $_GET["method"];
            }
            if (isset($_GET["params"])) {
                $url[2] = $_GET["params"];
            }
            return $url;
        }
    }

?>


