<?php

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // User is not logged in
    $button = '<div class="dropdown">
  <a class="btn btn-outline-success text-white  dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="text-white my-2 bi bi-person-square"></i>
    Profil
  </a>

  <ul class="dropdown-menu bg-success-subtle ">
    <li>
        <a class="dropdown-item text-dark m-1" href=\'' . BASEURL . '?controller=profil\'">
        <i class="text-dark bi bi-person-square"></i>
            Profil Saya
      </a>
  </li>
      <li>
          <a class="dropdown-item text-dark m-1" href=\'' . BASEURL . '?controller=langganan\'">
          <i class="text-dark bi bi-bag"></i>
              Langganan
      </a>
  </li>
  <li>
          <a class="dropdown-item text-danger m-1" href=\'' . BASEURL . '?controller=login&method=logOut\'">
          <i class="text-danger bi bi-box-arrow-left"></i>
              Keluar
          </a>
      </li>
  </ul>
</div>';
  
} else {
  //$button = $_SESSION['logged_in'];
  // User is logged in
  $button = '<button type="button" onclick="location.href=\'' . BASEURL . '?controller=login\'" class="btn btn-outline-success text-white mx-3">Masuk</button>
  <button type="button" onclick="location.href=\'' . BASEURL . '?controller=registrasi\'" class="btn btn-success">Daftar</button>';
}

//echo $button; // Echo the button markup
?>


<nav class="navbar bg-dark px-5 w-100 position-fixed z-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>">
              <img src="<?= BASEURL; ?>/assets/img/Logo ITCourse.png" alt="Logo" width="130" height="50" class="d-inline-block align-text-top">
            </a>
            <ul class="nav nav-underline mx-auto ">
              <li class="nav-item">
                <a class="nav-link text-white " aria-current="page" href="<?= BASEURL; ?>">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="?controller=kursus">Kursus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="?controller=langganan">Langganan</a>
              </li>
            </ul>
            
            <?= $button ?>
            
          </div>
      </nav> 
