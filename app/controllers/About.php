<?php 

class About extends Controller {
    public function index($nama = 'Dev', $pekerjaan = 'Mahasiswa'){
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}

?>