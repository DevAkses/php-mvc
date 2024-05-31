<form class="" id="video_bg" method="POST" role="search" class="form-input">
    <ul class="list-group">
    <?php foreach( $data['video'] as $video) : ?>
        <li class="list-group-item my-1 w-100"> <?= $video['video_title']  ?><a class="btn btn-primary float-end " href="?controller=kategori_adobe&method=detail&params=<?= $video['video_id']; ?>" role="button">Nonton Video</a> </li>
        <?php endforeach; ?>
    </ul>
    </form>
