<?php 

    class Kursus extends Controller {
        public function index() {
            session_start();
            // if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            // {
            //     echo "<script>
            //             alert('Login terlebih dahulu!');
            //             window.location.href = '" . BASEURL . "/langganan';
            //         </script>";
            //     $this->view('kursus');
            // } else {
            //     $this->view('login');
            // }

            // if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            // {
            //     $this->view('login');
            // } else {
            //     $this->view('kursus');
            // }

            $this->view('kursus');
        }
    }



?>
