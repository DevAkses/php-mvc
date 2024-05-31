<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_Dashboard</title>
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

<?php include 'include/header_admin.php';  ?>

<div class="w-100 mb-5 " style="padding-top: 80px;">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center " style="background-color: #767676;">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
          <h1 class="display-3 text-white my-3 fw-bold">Designed for designers</h1>
          <h3 class="fw-normal text-white-50 mb-3">Build anything you want with ITCourse</h3>
          <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <!-- <a class="icon-link icon-link-hover" href="#">
            Berlangganan
            <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
          </a> -->
            <a class="link-secondary text-white  " href="#">
             Hi Admin!
              <i class="bi bi-arrow-bar-right"></i>
            </a>
          </div>
      </div>
      <h1>
        <label for="exampleInputEmail1" class="form-label text-white fw-bold ">Tambahkan Video</label>
      </h1>
      <form class="mb-5 w-50 mx-auto" action="?controller=admin_dashboard&method=tambah" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white " name="">Judul Video</label>
          <input type="text" class="form-control" id="video_title" name="video_title"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white ">Link Video</label>
          <input type="text" class="form-control" id="link_video" name="link_video" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white ">Durasi Video</label>
          <input type="text" class="form-control" id="durasi_video" name="durasi_video" aria-describedby="emailHelp">
        </div> 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white ">ID Kursus</label>
          <select class="form-select " name="course_id" id="course_id" aria-label="Default select example">
            <option selected></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <button type="submit" onclick="return confirm('Apakah Anda yakin untuk menambakan video?')"  class="btn btn-primary">Submit</button>
      </form>
<?php include 'include/footer.php'; ?>

</body>
</html>