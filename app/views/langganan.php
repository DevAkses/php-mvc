

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
    <div class="bg-black">
        <!-- Header -->
        <?php include 'include/header.php';?>
        <img src="<?= BASEURL ?>/assets/img/lingkaran.png" alt="" class="z-0 position-absolute mt-5 translate-middle ">
        <div class="z-1">
          <div class="px-5 text-center text-white " style="padding-top: 100px; padding-bottom: 30px;">
              <div class="">
                  <h2 class="fw-bold ">Selamat Datang di ITCourse</h2>
                  <h5 class="text-white-50">Dengan hanya membayar sekali dan nikmati kursus desain tanpa batas, selamanya. </h5>
              </div>
              
                <div class=" mx-auto  rounded-5 " style="width: fit-content;">
                    <div class="card text-white " style="width: 50rem; margin-top: 20px; background-color: rgba(255,255,255,0.15)">
                        <h3 class="mt-3 fw-semibold ">Biaya Berlangganan</h3>
                        <img src="<?= BASEURL ?>/assets/img/Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="text-danger "><del>RP 5.000.000</del></h5>
                        <h5>to</h5>
                          <h4 class="card-title text-white">RP 1.500.000</h4>
                          <p class="card-text"></p>
                          <!-- Modal Figma -->
                          <button type="submit" class="btn btn-primary m-2 float-start " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Berlangganan Figma Project
                          </button>
                          <button type="submit" class="btn btn-primary m-2 float-end " data-bs-toggle="modal" data-bs-target="#ModalAdobe">
                            Berlangganan Adobe Photoshop
                          </button>
                          <button type="submit" class="btn btn-primary m-2 float-start" data-bs-toggle="modal" data-bs-target="#ModalWeb">
                            Berlangganan Web Graphics
                          </button>
                          <button type="submit" class="btn btn-primary m-2 float-end " data-bs-toggle="modal" data-bs-target="#ModalProduct">
                            Berlangganan Product Design
                          </button>
                        </div>
                      </div>
                </div>
                <!-- Modal -->
                <form action="?controller=langganan&method=membayar" method="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Berlangganan Figma Project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="?controller=langganan&method=membayarFigma" method="POST">
                      <div class="modal-body">
                        <div class="text-dark">
                            <h5 class="text-dark text-start my-3">Kode Bank : 01482487426</h5>
                              <h5 class="text-dark text-start my-3">Harga : 1.500.000</h5>
                              <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Metode Pembayaran</option>
                                <option value="1">Transfer Bank </option>
                              </select>
                              </div>
                              <input class="form-control my-3" type="text" placeholder="Kode Pembayaran" aria-label="default input example">
                              <h5></h5>
                              <a class="btn btn-primary float-start " href="?controller=langganan&method=membayarFigma" role="button" type="submit">Membayar</a>
                            <!-- <button type="submit" href="?controller=langganan&method=membayar"  class="btn btn-primary">Kirim Kode Pembayaran</button> -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                          </div>
                          </form>
                    </div>
                  </div>
                </div>
              <!-- End Modal Figma -->
               <!-- Modal Adobe -->
                        </div>
                      </div>
                </div>
                <!-- Modal -->
                <form action="?controller=langganan&method=membayarAdobe" method="">
                <div class="modal fade" id="ModalAdobe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Berlangganan Adobe Photoshop</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="?controller=langganan&method=membayarFigma" method="POST">
                      <div class="modal-body">
                        <div class="text-dark">
                            <h5 class="text-dark text-start my-3">Kode Bank : 01482487426</h5>
                              <h5 class="text-dark text-start my-3">Harga : 1.500.000</h5>
                              <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Metode Pembayaran</option>
                                <option value="1">Transfer Bank </option>
                              </select>
                              </div>
                              <input class="form-control my-3" type="text" placeholder="Kode Pembayaran" aria-label="default input example">
                              <h5></h5>
                              <a class="btn btn-primary" href="?controller=langganan&method=membayarAdobe" role="button" type="submit">Membayar</a>
                            <!-- <button type="submit" href="?controller=langganan&method=membayar"  class="btn btn-primary">Kirim Kode Pembayaran</button> -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              <!-- End Modal Adobe -->
              <!-- Modal -->
              <form action="?controller=langganan&method=membayarAdobe" method="">
                <div class="modal fade" id="ModalWeb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Berlangganan Web Graphics</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="?controller=langganan&method=membayarFigma" method="POST">
                      <div class="modal-body">
                        <div class="text-dark">
                            <h5 class="text-dark text-start my-3">Kode Bank : 01482487426</h5>
                              <h5 class="text-dark text-start my-3">Harga : 1.500.000</h5>
                              <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Metode Pembayaran</option>
                                <option value="1">Transfer Bank </option>
                              </select>
                              </div>
                              <input class="form-control my-3" type="text" placeholder="Kode Pembayaran" aria-label="default input example">
                              <h5></h5>
                              <a class="btn btn-primary" href="?controller=langganan&method=membayarWeb" role="button" type="submit">Membayar</a>
                            <!-- <button type="submit" href="?controller=langganan&method=membayar"  class="btn btn-primary">Kirim Kode Pembayaran</button> -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              <!-- End Modal Web -->
              <!-- Modal Product -->
              <form action="?controller=langganan&method=membayarProduct" method="">
                <div class="modal fade" id="ModalProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Berlangganan Product Design</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="?controller=langganan&method=membayarFigma" method="POST">
                      <div class="modal-body">
                        <div class="text-dark">
                            <h5 class="text-dark text-start my-3">Kode Bank : 01482487426</h5>
                              <h5 class="text-dark text-start my-3">Harga : 1.500.000</h5>
                              <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Metode Pembayaran</option>
                                <option value="1">Transfer Bank </option>
                              </select>
                              </div>
                              <input class="form-control my-3" type="text" placeholder="Kode Pembayaran" aria-label="default input example">
                              <h5></h5>
                              <a class="btn btn-primary" href="?controller=langganan&method=membayarProduct" role="button" type="submit">Membayar</a>
                            <!-- <button type="submit" href="?controller=langganan&method=membayar"  class="btn btn-primary">Kirim Kode Pembayaran</button> -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              <!-- End Modal Product -->
          </div>
          <div class="mx-auto " style="width: fit-content;">
              <div class="card text-white" style="width: 50rem; margin-top: 20px; background-color: rgba(255,255,255,0.15)">
                  <div class="card-body ">
                      <h3 class="card-title text-center fw-bold mb-4">Benefit Berlangganan</h3>
                      <div class="px-5 ">
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Akses Seumur Hidup!</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Tidak ada biaya tambahan</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Dibimbing oleh profesional</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Menigkatkan Skill</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Mendapatkan Sertifikat</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      </div>
                      <div class="mt-4 mx-auto " style="width: fit-content;">
                          <button type="button" href="" class="btn btn-outline-success text-white  px-5">Belajar Sekarang</button>
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

