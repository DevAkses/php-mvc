<?php 

    class Admin_Web extends Controller {
        public function index() {
            $data['video_web'] = $this-> model('Admin_Video_model')->getAllVideosWeb();
            $this->view('admin_web', $data);
        }

        public function hapus_video()
        {  
            session_start();
            if( $this->model('Admin_Video_model')->hapusVideo($_POST) > 0)
            {
                echo "<script>
                        alert('Video Berhasil dihapus');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard';
                    </script>";
                    $this->view('admin_dashboard');
                exit;
            } else {
                echo "<script>
                        alert('Video Gagal dihapus');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard';
                    </script>";
                    $this->view('admin_dashboard');
                exit;
            }
        }
}