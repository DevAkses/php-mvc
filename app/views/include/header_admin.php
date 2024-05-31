  <nav class="navbar  navbar-expand-lg bg-dark p-3 position-fixed w-100 z-2">
  <div class="container">
  <img src="<?= BASEURL; ?>/assets/img/Logo ITCourse.png" width="130" height="50" alt="" class="me-1">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ">
      <li class="nav-item d-flex ">
        <a href="<?= BASEURL; ?>?controller=admin_dashboard" class="nav-link text-white link-body-emphasis" aria-current="page">
          Home
        </a>
      </li>
      <li>
        <a href="<?= BASEURL; ?>?controller=admin_figma" class="nav-link  text-white link-body-emphasis" >
          Figma Project
        </a>
      </li>
      <li>
        <a href="<?= BASEURL; ?>?controller=admin_adobe" class="nav-link   text-white link-body-emphasis" >
          Adobe Photoshop
        </a>
      </li>
      <li>
        <a href="<?= BASEURL; ?>?controller=admin_web" class="nav-link   text-white link-body-emphasis" >
           Web Graphics
        </a>
      </li>
      <li>
        <a href="<?= BASEURL; ?>?controller=admin_product" class="nav-link   text-white link-body-emphasis" >
          Product Design
        </a>
      </li>
      </ul>
      <a type="button" href="<?= BASEURL; ?>?controller=admin_login" class="btn btn-danger" style="">Logout</a>
    </div>
  </div>
</nav>