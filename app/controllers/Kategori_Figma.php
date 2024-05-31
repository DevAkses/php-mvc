<?php 

    class Kategori_Figma extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $data['video'] = $this-> model('Kategori_Figma_model')->getAllVideosFigma();
                $this->view('kategori_figma', $data);
                // var_dump($data['video']);
            } else {
                echo "<script>
                        alert('Login terlebih dahulu!');
                    </script>";   
                $this->view('login');
            }
            
        }

        public function detail($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Figma_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

        public function cari($keyword)
        {
            session_start();
            $data['video'] = $this-> model('Kategori_Figma_model')->cariDataVideosFigma($keyword);
            $this->view('ajax', $data);
            // var_dump($data['video']);
        }

    }

?>
