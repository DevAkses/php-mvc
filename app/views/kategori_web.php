

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
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
<!-- <img src="<?= BASEURL ?>/assets/img/lingkaran.png" alt="" class="z-0 position-absolute mt-5 translate-middle "> -->
    <div class="bg-black">
        <!-- Header -->
        <?php include 'include/header.php';?>
        
        <div class="z-1">
            <div class="px-5" style="padding-top: 90px; padding-bottom: 150px;" >
                <div class="px-5 py-2 d-flex ">
                    <h2 class="text-white z-1 fw-bold ">Web Graphics</h2>
                </div>
                <div class="px-5 z-1">
                    <input class="form-control w-50 mx-auto my-4 z-1" type="search" placeholder="Search" aria-label="Search" id="keyword">
                <form class="" role="search" id="video_bg" method = "POST">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    
                    <ul class="list-group">
                        <?php foreach( $data['video'] as $video) : ?>
                            <li class="list-group-item my-1 w-100"> <?= $video['video_title']  ?><a class="btn btn-primary float-end " href="?controller=kategori_web&method=detail&params=<?= $video['video_id']; ?>" role="button">Nonton Video</a> </li>
                            
                            <?php endforeach; ?>
                        </ul>
                        
                </form>
                </div>
            </div>
            
        </div>
        
        
        <!-- Footer -->
        <?php include 'include/lower.php';?>
    </div>

<script>

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container1 = document.getElementById('video_bg');


keyword.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();

    //Cek kesiapan AJAX
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                container1.innerHTML = xhr.responseText;
                // container1.innerHTML = 'Tidak ada file yang anda cari!' ;
            } else {
                container1.innerHTML = 'Tidak ada file yang anda cari!' ;
                console.error('AJAX request failed with status:', xhr.status);
            }
        }
    }

    //eksekusi ajax 
    xhr.open('GET', '?controller=kategori_web&method=cari&params=' + keyword.value, true);
    xhr.send();

}) ;

</script>
</body>
</html>

<!-- <iframe src="" frameborder="0" allowfullscreen width="192px" height= "144px" class=""></iframe> -->