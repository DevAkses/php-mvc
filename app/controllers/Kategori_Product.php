<?php 

    class Kategori_Product extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $data['video'] = $this-> model('Kategori_Product_model')->getAllVideosProduct();
                $this->view('kategori_product', $data);
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
            $data['video'] = $this->model('Kategori_Product_model')->getVideoById($id);
            $this->view ('detail_video', $data);
        }

        public function cari($keyword)
        {
            session_start();
            $data['video'] = $this-> model('Kategori_Product_model')->cariDataVideosProduct($keyword);
            $this->view('ajax', $data);
            // var_dump($data['video']);
        }

    }

?>
