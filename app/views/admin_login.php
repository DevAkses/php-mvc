
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
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
    <div class="bg-dark-subtle  rounded-3 w-50 mx-auto mt-5">
        <h1 class="p-5 text-center text-white rounded-top-3 fw-bold bg-dark">Login Admin</h1>
        <form action="?controller=admin_login&method=loginAdmin" method="post">
          <div class="Form-Login mx-auto w-50 " style="padding-bottom:50px">
              <h2 class="py-2">Masuk</h2>
              <input class="form-control me-2 my-2" type="text" placeholder="Username" aria-label="Search" id="username_admin" name="username_admin">
              <input class="form-control me-2 my-2" type="password" placeholder="Password" aria-label="Search" id="password_admin" name="password_admin">
              <!-- <a class="my-2 float-end " href="">Lupa Password?</a> -->
              <button type="submit" class="btn btn-success w-100 my-3">Masuk</button>
              <!-- <h6 class="my-2 text-center ">Belum punya akun? ayo <a class="" href="">Daftar</a></h6> -->
          </div>
        </form>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>