<div class="modal fade" id="modal_news<?php echo $news['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Slider</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_other_news.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_news" value="<?php echo $news['id']?>"/>
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" class="form-control" name="judul_med" placeholder="Masukkan Judul Berita" value="<?php echo $news['judul_med'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Link Berita</label>
                            <input type="text" class="form-control" name="link_med" placeholder="Masukkan Link Berita" value="<?php echo $news['link_med'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Referensi</label>
                            <input type="text" class="form-control" name="sekilas_med" placeholder="Masukkan Referensi Berita" value="<?php echo $news['sekilas_med'] ?>" required></input>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Update"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>