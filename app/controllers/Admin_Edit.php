<?php 

    class Admin_Edit extends Controller {
        public function index() {
            // $data_video = $this-> model('Admin_Video_model')->getVideoById();
            // $data['video_edit'] = $data_video;
            $this->view('admin_edit');
            // var_dump($data['video_edit']);
        }

        public function hapus_video($id)
        {  
            if( $this->model('Admin_Video_model')->hapusVideo($id) > 0)
            {
                echo "<script>
                        alert('Video Berhasil dihapus');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard;
                    </script>";
                    $this->view('admin_dashboard');
                    die();
            } else {
                echo "<script>
                        alert('Video Gagal dihapus');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard';
                    </script>";
                    $this->view('admin_dashboard');
                    die();

            }
        }

        public function ubah()
        {
            if( $this->model('Admin_Video_model')->updateVideo($_POST) > 0)
            {
                echo "<script>
                        alert('Video Berhasil diubah');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard';
                    </script>";
                exit;
            } else {
                echo "<script>
                        alert('Video Gagal diubah');
                        window.location.href = '" . BASEURL . "?controller=admin_dashboard';
                    </script>";
                    
                exit;
            }
        }

        public function edit($id)
        {
            session_start();
            $data['video_edit'] = $this->model('Admin_Video_model')->getVideoById($id);
            $this->view ('admin_edit', $data);
            var_dump($data['video_edit']);

        }
}