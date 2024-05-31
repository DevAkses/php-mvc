<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Web</title>
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
 
<?php include 'include/header_admin.php'; ?>

<div class="" style="padding-top: 150px; padding-bottom: 50px;">
      <div class="container bg-dark-subtle  rounded-3 mb-5 py-5">
          <div class="mx-auto w-50 " >
              <form class="" action="?controller=admin_edit&method=ubah" method="post">
              <h3 class="text-center fw-bold  ">EDIT VIDEO</h3>
              <h5 class="fw-semibold ">ID Video</h5>
              <input type="text" class="form-control " id="video_id" name="video_id" aria-describedby="emailHelp" value="<?= $data['video_edit']['video_id'] ?>"disabled >
              <input type="text" class="form-control visually-hidden" id="video_id" name="video_id" aria-describedby="emailHelp" value="<?= $data['video_edit']['video_id'] ?>">
              <h5 class="fw-semibold mt-3 mb-2">Judul Video</h5>
                      <input type="text" class="form-control" id="video_title" name="video_title" aria-describedby="emailHelp" value="<?= $data['video_edit']['video_title'] ?>">
                    </div>
                    <div class="my-3 mx-auto w-50">
                        <h5 class="fw-semibold">Link Video</h5>
                        <input type="text" class="form-control" id="link_video" name="link_video" value="<?= $data['video_edit']['link_video'] ?>">
                  </div>
                  <div class="my-3 mx-auto pb-5 w-50">
                      <h5 class="fw-semibold">Durasi Video</h5>
                      <input type="text" class="form-control" id="durasi_video" name="durasi_video" value="<?= $data['video_edit']['durasi_video'] ?>">
                      <button type="submit" onclick="return confirm('Apakah Anda yakin untuk menyimpan perubahan?')" class="btn btn-primary my-3 float-end">Simpan</button>
                </form>
            </div>
      </div>
</div href="?controller=admin_edit&method=ubah">

<?php include 'include/footer.php';?>


</body>
</html>