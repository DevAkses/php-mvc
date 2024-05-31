

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Page</title>
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
    <div class="">
        <!-- Header -->
        <?php include 'include/header.php';?>
        <img src="<?= BASEURL ?>/assets/img/lingkaran.png" alt="" class="z-0 position-absolute mt-5 translate-middle ">
        <div class="Main Content px-5 z-1 pt-5">
            <div class="px-5">
                <div class="bg-black ">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators z-0">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="<?= BASEURL ?>/assets/img/Gambar Depan Beranda.png" class="d-block w-50 mx-auto" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="<?= BASEURL ?>/assets/img/Gambar Depan Beranda.png" class="d-block w-50 mx-auto" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="<?= BASEURL ?>/assets/img/Gambar Depan Beranda.png" class="d-block w-50 mx-auto " alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> -->
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev z-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next z-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="px-5 m-4 ">
                    <div class="">
                        <h4 class="text-white z-1">Figma students also learn </h4>
                    </div>
                    <div class="d-flex">
                        <button type="button" onclick="location.href='?controller=kategori_figma'" class="btn btn-outline-success w-100 m-1 text-white z-1">Figma Project</button>
                        <button type="button" onclick="location.href='?controller=kategori_adobe'" class="btn btn-outline-success w-100 m-1 text-white z-1">Adobe Photoshop</button>
                    </div>
                    <div class="d-flex ">
                        <button type="button" onclick="location.href='?controller=kategori_web'" class="btn btn-outline-success w-100 m-1 text-white z-1">Web Graphics</button>
                        <button type="button" onclick="location.href='?controller=kategori_product'" class="btn btn-outline-success w-100 m-1 text-white z-1">Product Design</button>
    
                    </div>
                </div>
            </div>
            <div class="container mx-auto bg-dark rounded-3 ">
              <div class="Courses p-5 mb-5 ">
                  <div class="mx-5">
                      <h4 class="text-white ">All Design Courses</h4>
                  </div>
                  <div class="mx-5 my-3">
                      <div class="dropdown">
                          <a class="btn btn-outline-success text-white  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                          </a>
                        
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Most Popular</a></li>
                            <li><a class="dropdown-item" href="#">Rating</a></li>
                            <li><a class="dropdown-item" href="#">--</a></li>
                          </ul>
                        </div>
                  </div>
                  <div class="mx-5 my-2 z-1">
                      <div class="d-flex bg-black mx-1" style="width: 42rem; border: 1px solid white; border-radius: 10px;" >
                          <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top w-50" alt="...">
                          <div class="card-body my-auto me-3 ">
                            <h5 class="card-title text-white my-4 mx-5 ">Figma Projet</h5>
                            <!-- <p class="card-text text-white-50 ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-primary z-1 mx-5">Mulai Belajar</a>
                          </div>
                        </div>
                  </div>
                  <div class="mx-5 my-3 pe-3 z-1">
                      <div class="d-flex bg-black mx-1" style="width: 42rem; border: 1px solid white; border-radius: 10px;" >
                          <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top w-50 " alt="...">
                          <div class="card-body my-auto me-3">
                            <h5 class="card-title text-white my-4 mx-5 ">Adobe Photosop</h5>
                            <!-- <p class="card-text text-white-50 ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-primary z-1 mx-5">Mulai Belajar</a>
                          </div>
                        </div>
                  </div>
                  <div class="mx-5 my-2 z-1" >
                      <div class="d-flex bg-black mx-1" style="width: 42rem; border: 1px solid white; border-radius: 10px;" >
                          <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top w-50" alt="...">
                          <div class="card-body my-auto me-3 z-1">
                            <h5 class="card-title text-white my-4 mx-5 ">Product Design</h5>
                            <!-- <p class="card-text text-white-50 ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-primary z-1 mx-5" >Mulai Belajar</a>
                          </div>
                        </div>
                  </div>
                  <div class="mx-5 my-2 z-1">
                      <div class="d-flex bg-black mx-1" style="width: 42rem; border: 1px solid white; border-radius: 10px;" >
                          <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top w-50" alt="...">
                          <div class="card-body my-auto me-3 ">
                            <h5 class="card-title text-white my-4 mx-5 ">Web Graphics</h5>
                            <!-- <p class="card-text text-white-50 ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-primary mx-5">Mulai Belajar</a>
                          </div>
                        </div>
                  </div>
              </div>
            </div>
        </div>
        <!-- Footer -->
      <?php include 'include/lower.php';?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>