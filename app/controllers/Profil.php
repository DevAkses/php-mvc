<?php 

    class Profil extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $user_data = $this->model('EditProfil_model')->getProfilById();
                $data['user_data'] = $user_data;
                $this->view('profil', $data);
            } else {
                $this->view('login');
            }
        }

        public function upload(){
            session_start();
            if(isset($_FILES['gambar'])){
                $ekstensi_diperbolehkan = array('png', 'jpg');
                $gambar = $_FILES['gambar']['name'];
                $x = explode('.', $gambar);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['gambar']['tmp_name'];
                move_uploaded_file($file_tmp, BASEURL.'/../assets/img/'.$gambar);
                $data['gambar'] = $gambar;
                $this->model('EditProfil_model')->insertGambar($gambar);
                header('location: ?controller=profil');
            }
        }


    }

    

?>
