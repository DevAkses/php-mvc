<?php 
    class Login extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                // Pengguna sudah login
                // Jangan tampilkan halaman login
                $this->view('index');
                // header('Location: ' . BASEURL . '?controller=index');
            } else {
                // Pengguna belum login
                // Tampilkan halaman login
                $this->view('login');
            }
            
            $this->view('login');
        }

        public function loginUser()
        {
            if( $this->model('Login_model')->cekUsername($_POST) < 1)
            {
                echo "<script>
                        alert('Username tidak ada!');
                        window.location.href = '" . BASEURL . "?controller=login';
                    </script>";
                exit;
            }


            if( $this->model('Login_model')->cekPassword($_POST) > 0)
            {
                // set session
                // session_start();
                 $_SESSION['logged_in'] = true;

                echo "<script>
                        alert('Anda berhasil login');
                        window.location.href = '" . BASEURL . "?controller=index';
                    </script>";
                exit;
                
            } else {
                echo "<script>
                        alert('Password salah!');
                        window.location.href = '" . BASEURL . "?controller=login';
                    </script>";
                exit;
            }
        }

        public function logOut()
        {   
             // Destroy the session
            session_start();
            session_destroy();
            $_SESSION['logged_in'] = false;
            echo "<script>
                        alert('Berhasil Logout!');
                        window.location.href = '" . BASEURL . "?controller=login';
                    </script>";
            // // Redirect to the login page
            // $this->view('login');
        }

    }

    


?>
