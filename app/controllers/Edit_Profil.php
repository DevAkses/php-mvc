<?php 

    class Edit_Profil extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $user_data = $this->model('EditProfil_model')->getProfilById();
                $data['user_data'] = $user_data;
                $this->view('edit_profil', $data);
            } else {
                $this->view('login');
            }
            
        }

        public function hapus()
        {  
            session_start();
            if( $this->model('EditProfil_model')->hapusAkun($_POST) > 0)
            {
                echo "<script>
                        alert('Akun Berhasil dihapus');
                        window.location.href = '" . BASEURL . "?controller=login&method=logOut';
                    </script>";
                exit;
            } else {
                echo "<script>
                        alert('Akun Gagal dihapus');
                        window.location.href = '" . BASEURL . "?controller=edit_profil';
                    </script>";
                exit;
            }
        }

        public function edit()
        {
            session_start();
            if( $this->model('EditProfil_model')->updateProfil($_POST) > 0)
            {
                echo "<script>
                        alert('Akun Berhasil diubah');
                        window.location.href = '" . BASEURL . "?controller=profil';
                    </script>";
                exit;
            } else {
                echo "<script>
                        alert('Akun Gagal diubah');
                        window.location.href = '" . BASEURL . "?controller=profil';
                    </script>";
                    
                exit;
            }
        }
    }




?>
