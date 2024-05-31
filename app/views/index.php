
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins&family=Quicksand:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
      body {
        font-family: 'Poppins';
      }
    </style>
  </head>
  <body class="bg-black">
  <?php include 'include/header.php';?>
    <div class="bg-black ">
    <!-- Header -->
    <img src="<?= BASEURL ?>/assets/img/lingkaran.png" alt="" class="z-0 position-absolute mt-5 translate-middle ">
    <form action="" method="">
      <div class="main-content bg-black mb-5 px-5 d-flex justify-content-between z-1 pt-5 ">
      
        <div class="my-auto text-white z-1">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true)  :  ?>
          <h4>Selamat datang, <?= $_SESSION['nama_user'] ?>!</h4>
        <?php endif;  ?>
        
          <h2 class="w-75 z-1 fw-bold">Bangun Karirmu Sebagai Designer Profesional</h2>
          <div class="my-3 h5 z-1">Mulai belajar terarah dengan Kursus Desain</div>
          <a href="<?= BASEURL; ?>/kursus" class="btn btn-success  ">Belajar Sekarang</a>
        </div>
        <div class="">
          <img src="<?= BASEURL ?>/assets/img/Gambar Depan Beranda.png" alt="Logo" width="500" height="500" class="d-inline-block align-text-top">
        </div>
      </div>
      <div class="w-100">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
          <h1 class="display-3 text-white my-3 fw-bold">Designed for designers</h1>
          <h3 class="fw-normal text-white-50 mb-3">Build anything you want with ITCourse</h3>
          <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <!-- <a class="icon-link icon-link-hover" href="#">
            Berlangganan
            <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
          </a> -->
            <a class="link-secondary text-white  " href="<?= BASEURL; ?>/langganan">
              Berlangganan
              <i class="bi bi-arrow-bar-right"></i>
            </a>
          </div>
      </div>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
      <div class="Second-Content px-5 bg-black pb-5">
        <div class="">
          <h2 class="py-5 text-white fw-bold">Perluas peluang karir Anda melalui Figma</h2>
        </div>
          <div class="d-flex">
            <div class="card bg-secondary mx-1 text-white " style="width: 18rem;">
              <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Figma Project</h5>
                <p class="card-text">Kursus Figma Project menekankan aspek kolaborasi. Anda akan belajar bagaimana bekerja sama dalam tim menggunakan Figma, memfasilitasi komunikasi yang lancar dan efektif selama proses desain.</p>
                <a href="<?= BASEURL; ?>?controller=kategori_figma" class="btn btn-success">Mulai Belajar</a>
              </div>
            </div>
            <div class="card bg-secondary mx-1 text-white" style="width: 18rem;">
              <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Adobe Photosop</h5>
                <p class="card-text">Kursus Adobe Photoshop menyajikan serangkaian kursus singkat dan praktis untuk membantu Anda menguasai segala hal tentang Adobe Photoshop. Dari dasar hingga tingkat lanjutan, setiap kursus memberikan panduan langkah demi langkah dan proyek praktis untuk meningkatkan keterampilan desain anda.</p>
                <a href="<?= BASEURL; ?>?controller=kategori_adobe" class="btn btn-success">Mulai Belajar</a>
              </div>
            </div>
            <div class="card bg-secondary mx-1 text-white" style="width: 18rem;">
              <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Web Graphics</h5>
                <p class="card-text">Kursus Graphic  Design dirancang untuk mengajarkan dasar-dasar desain, teknik komposisi visual, serta penggunaan perangkat lunak desain</p>
                <a href="<?= BASEURL; ?>?controller=kategori_web" class="btn btn-success">Mulai Belajar</a>
              </div>
            </div>
            <div class="card bg-secondary mx-1 text-white" style="width: 18rem;">
              <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Product Design</h5>
                <p class="card-text">Kursus Product Design menampilkan serangkaian kursus singkat yang dirancang untuk memandu Anda melalui langkah-langkah kunci dalam mendesain produk yang inovatif dan fungsional.</p>
                <a href="<?= BASEURL; ?>?controller=kategori_product" class="btn btn-success">Mulai Belajar</a>
              </div>
            </div>
        </div>
      </div>
    </form>
     
      
    </div>
     <!-- Footer -->
     <?php include 'include/lower.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>