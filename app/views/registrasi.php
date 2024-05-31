<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
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
  <body>
    <div class="">
        <!-- Header -->
        <?php include 'include/header.php';?>
      <form action="?controller=registrasi&method=tambahuser" method="post">
        <div class="Form-Login mx-auto w-25 z-0 " style="padding-top: 120px; padding-bottom:50px">
            <h2 class="py-2">Daftar</h2>
            <input class="form-control me-2 my-2" type="text" placeholder="Nama Lengkap" aria-label="Search" id="nama_user" name="nama_user">
            <input class="form-control me-2 my-2" type="text" placeholder="Username" aria-label="Search" id="username" name="username">
            <input class="form-control me-2 my-2" type="email" placeholder="Email" aria-label="Search" id="email" name="email_user">
            <input class="form-control me-2 my-2" type="password" placeholder="Password" aria-label="Search" id="sandi_user" name="sandi_user">
            <input class="form-control me-2 my-2" type="password" placeholder="Konfirmasi Password" aria-label="Search" id="konfirmasipassword" name="konfirmasipassword">
            <button type="submit" class="btn btn-success w-100 my-3">Daftar</button>
            <h6 class="my-2 text-center ">Dengan melakukan Registrasi, Anda setuju dengan <a class="" href="">syarat &
                ketentuan</a> ITCourse.</h6>
        </div>
      </form>
        
        <!-- Footer -->
      <?php include 'include/lower.php';?>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>