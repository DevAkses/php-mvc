<?php 

    class Home extends Controller {
        public function index() 
        {
            session_start();
            // $username = $this->model('Homepage_model')->getUser();
            // $data['username'] = $username;
            // var_dump($data['username']);
            $this->view('index');
        }

        public function dataUser()
        {   

            // session_start();

            // if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            //     $username = $this->model('Homepage_model')->getUser();
            //     $data['username'] = $username;
            //     $this->view('index', $data);
            // } else {
            //     // Redirect to login page
            //     return false;
            // }
            
        }

    }

?>


