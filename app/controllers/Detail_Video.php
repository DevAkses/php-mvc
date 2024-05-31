<?php 

    class Detail_Video extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $this->view('detail_video');
            } else {
                $this->view('login');
            }
            $this->view('detail_video');
        }
    }


?>
