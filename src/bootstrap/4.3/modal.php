<div class="modal" tabindex="-1" role="dialog" id="<?php echo $this->id; ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form action="<?php echo $this->action; ?>" method="post">
        <?php echo $this->csrf; ?>

        <div class="modal-header">
            <h5 class="modal-title"> <?php echo $this->title; ?> </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <p><?php echo $this->description; ?></p>

            <?php if($this->show_reason == True): ?>
            <div class="input-reason" style="margin-top: 10px;">
            <input type="text" name="reason" value="" placeholder="<?php echo $this->reason_placeholder; ?>" class="form-control">
            </div>
            <?php endif; ?>
        </div>

        <div class="modal-footer">
            <input type="hidden" name="id" class="id-trx" value="">
            <button type="submit" class="btn <?php echo $this->button['yes']['class']; ?>"> <?php echo $this->button['yes']['text']; ?> </button>
            <button type="button" class="btn <?php echo $this->button['no']['class']; ?>" data-dismiss="modal"> <?php echo $this->button['no']['text']; ?> </button>
        </div>
      </form>

    </div>
  </div>
</div>
