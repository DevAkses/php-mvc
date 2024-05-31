<form class="" id="video_bg" role="search">
                  <ul class="list-group">
                      <?php foreach( $data['video'] as $video) : ?>
                        <li class="list-group-item my-1 w-100 d-flex"> 
                          <p class="w-100 my-auto ">
                            <?= $video['video_title']  ?>
                          <p> 
                            <div class="w-25 justify-content-md-end">
                              <a class="btn btn-primary float-end m-1 "  href="?controller=admin_edit&method=edit&params=<?= $video['video_id']; ?>" role="button">Edit</a>
                          <form action="?controller=admin_web&method=hapus_video&params=<?= $video['video_id']; ?> " method="post">
                            <a class="btn btn-danger float-end m-1" type="submit" onclick="return confirm('Apakah Anda yakin untuk menghapus Video?')" href="?controller=admin_edit&method=hapus_video&params=<?= $video['video_id']; ?>" role="button">Hapus</a> 
                          </form>
                            </div>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </form>