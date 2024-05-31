<?php 

    class Registrasi extends Controller {
        
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $this->view('index');
            } else {
                $this->view('registrasi');
            }
            $this->view('registrasi');
        }

        public function tambahuser() 
        {
            $data = $_POST;
            if (empty($data['nama_user']) || empty($data['username']) || empty($data['email_user']) || empty($data['sandi_user'])) {
                echo "<script>
                        alert('Semua kolom harus diisi.');
                        window.location.href = '" . BASEURL . "?controller=registrasi';
                    </script>";
                exit;
            }

            if( $this->model('Registrasi_model')->cekUsername($data) > 0)
            {
                echo "<script>
                        alert('Username telah ada!');
                        window.location.href = '" . BASEURL . "?controller=registrasi';
                    </script>";
                exit;
            }

            if( $this->model('Registrasi_model')->cekEmail($data) > 0)
            {
                echo "<script>
                        alert('Email sudah ada!');
                        window.location.href = '" . BASEURL . "?controller=registrasi';
                    </script>";
                exit;
            }

            if( $data['sandi_user'] !== $data['konfirmasipassword'])
            {
                echo "<script>
                        alert('Konfirmasi password tidak sesuai!');
                        window.location.href = '" . BASEURL . "?controller=registrasi';
                    </script>";
                exit;
            }

            if( $this->model('Registrasi_model')->registrasiUser($data) > 0)
            {
               
                echo "<script>
                        alert('Registrasi berhasil!');
                        window.location.href = '" . BASEURL . "?controller=login';
                    </script>";
                exit;
            } else {
                // Registration failed
                //var_dump($_POST);
                echo "<script>
                        alert('Gagal melakukan registrasi. Silakan coba lagi.');
                    </script>";
                header('Location: ' . BASEURL . '?controller=registrasi');
                exit;
            }
        
        }



}

?>
