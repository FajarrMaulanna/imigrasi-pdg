<div class="modal fade" id="modalseputar<?php echo $own['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $own['header']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
            <a href="backend/files/own_news/<?php echo $own['img_news'];?>" target="_blank"><img id="img_own_modal" src="backend/files/own_news/<?php echo $own['img_news']; ?>" alt=""></a>
        </div>
        <div class="row">
            <p><?php echo $own['desc_news'];?></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>