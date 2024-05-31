<?php 

    class Admin_Dashboard extends Controller {
        public function index() {
            $this->view('admin_dashboard');
        }

        public function tambah()
        {
            if( $this->model('Admin_Dashboard_model')->tambahVideo($_POST) > 0)
            {
                echo "<script>
                        alert('Video berhasil ditambahkan!');
                    </script>";
                $this->view('admin_dashboard');
                exit;
            } else {
                echo "<script>
                        alert('Video gagal ditambahkan!');
                    </script>";
                $this->view('admin_dashboard');
                exit;
            }
            
        } 
}