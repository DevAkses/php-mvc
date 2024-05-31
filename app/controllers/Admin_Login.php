<?php 

    class Admin_Login extends Controller {
        public function index() {
            $this->view('admin_login');
        }


        public function loginAdmin()
        {
            if( $this->model('Admin_model')->cekUsername($_POST) < 1)
            {
                echo "<script>
                        alert('Username tidak ada!');
                        window.location.href = '" . BASEURL . "?controller=Admin_Login';
                    </script>";
                exit;
            }


            if( $this->model('Admin_model')->cekPassword($_POST) > 0)
            {
                echo "<script>
                        alert('Anda berhasil login');
                        window.location.href = '" . BASEURL . "?controller=Admin_Dashboard';
                    </script>";
                exit;
                
            } else {
                echo "<script>
                        alert('Password salah!');
                        window.location.href = '" . BASEURL . "?controller=Admin_Login';
                    </script>";
                exit;
            }
        }

}