<?php 

    class Kategori_Web extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $data['video'] = $this-> model('Kategori_Web_model')->getAllVideosWeb();
                $this->view('kategori_web', $data);
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
            $data['video'] = $this->model('Kategori_Web_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

        public function edit($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Web_model')->getVideoById($id);
            $this->view ('admin_edit', $data);

        }

        public function cari($keyword)
        {
            session_start();
            $data['video'] = $this-> model('Kategori_Web_model')->cariDataVideosWeb($keyword);
            $this->view('ajax', $data);
            // var_dump($data['video']);
        }

        public function cari_admin($keyword)
        {
            session_start();
            $data['video'] = $this-> model('Kategori_Web_model')->cariDataVideosWeb($keyword);
            $this->view('ajax_web', $data);
            // var_dump($data['video']);
        }

    }

?>
