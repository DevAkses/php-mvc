<?php 

    class Kategori_Adobe extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $data['video'] = $this-> model('Kategori_Adobe_model')->getAllVideosAdobe();
                $this->view('kategori_adobe', $data);
                // var_dump($data['video']);
            } else {
                echo "<script>
                        alert('Login terlebih dahulu!');
                    </script>";   
                $this->view('login');
            }
            
        }

        public function cari($keyword)
        {
            session_start();
            $data['video'] = $this-> model('Kategori_Adobe_model')->cariDataVideosAdobe($keyword);
            $this->view('ajax', $data);
            // var_dump($data['video']);
        }

        public function detail($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Adobe_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

    }

?>
