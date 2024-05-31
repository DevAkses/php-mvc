<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins&family=Quicksand:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
      body {
        font-family: 'Poppins';
      }
      /* object {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        } */
    </style>
</head>
<?php 
function youtube($url){
	$link=str_replace('http://www.youtube.com/watch?v=', '', $url);
	$link=str_replace('https://www.youtube.com/watch?v=', '', $link);
	$data='<object width="1000" height="563" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
	<param name="src" value="http://www.youtube.com/v/'.$link.'" />
	</object>';
	return $data;
}

function youtube1($url) {
  $link = str_replace('https://www.youtube.com/watch?v=', '', $url);
  $data = '<iframe width="1200" height="675" src="https://www.youtube.com/embed/' . $link . '" frameborder="0" allowfullscreen></iframe>';
  return $data;
}

?>
<body>
    <!-- Header -->
    <?php include 'include/header.php';?>
    <div class="bg-black">
        <div class="px-5" style="padding-top: 90px;" >
            <div class="px-5 py-2 d-flex ">
            <a href="<?= BASEURL; ?>" class="btn btn-success me-3 my-1 ">Home</a>
                <h2 class="text-white">Figma Project</h2>
            </div>
            <div class="px-5">
                <?php echo youtube($data['video']['link_video']);  ?>
                <h3 class="text-white"><?= $data['video']['video_title']?></h3>
                <!-- <h5 class="text-white-50"><?= $data['video']['durasi_video']?>  -->
            <!-- </h5><h5 class="text-white-50">12000 kali ditonton </h5> -->
        </div>
<!-- Footer -->
<?php include 'include/lower.php';?>
</body>
</html>