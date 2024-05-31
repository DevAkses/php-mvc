<?php 

    class Langganan extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) 
            {
                $this->view('langganan');
            } else {
                echo "<script>
                    alert('Login terlebih dahulu!');
                    window.location.href = '" . BASEURL . "?controller=Login';
                </script>";
            }
        }

        public function membayar()
        {
            session_start();
            if ($this-> model('Langganan_model')->insertValue() > 0 &&  $this->model('Langganan_model')->insertCourseFigma() && $this->model('Langganan_model')->insertCourseAdobe() && $this->model('Langganan_model')->insertCourseWeb() &&  $this->model('Langganan_model')->insertCourseProduct()) 
            {
            echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;

            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;
            }
            
            
        }

        public function membayarFigma()
        {
            session_start();
            if ($this->model('Langganan_model')->insertCourseFigma() > 0 ) 
            {

            echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;

            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;
            }
        }


        public function membayarAdobe()
        {
            session_start();
            if ($this->model('Langganan_model')->insertCourseAdobe() > 0 ) 
            {

            echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;

            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;
            }
        }

        public function membayarWeb()
        {
            session_start();
            if ($this->model('Langganan_model')->insertCourseWeb() > 0 ) 
            {

            echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;

            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;
            }
        }


        public function membayarProduct()
        {
            session_start();
            if ($this->model('Langganan_model')->insertCourseProduct() > 0) 
            {

            echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;

            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "?controller=langganan';
                    </script>";
                exit;
            }
        }
    }



?>
