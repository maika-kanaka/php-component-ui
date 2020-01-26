<?php if($view_as == ''): ?>

<div class="form-group">
  <label> <?php echo $this->label; ?> </label>

  <?php include $this->template_path . 'radio-elm.php'; ?>

  <?php $this->_elmDescription(); ?>

  <?php $this->_elmMsgError(); ?>
</div>

<?php elseif($view_as == 'horizontal'): ?>

<div class="form-group">
  <div class="row">
    <label for="inputTitle" class="col-sm-4 col-form-label"> <?php echo $this->label; ?> </label>
    <div class="col-sm-8">
      <div style="padding-top: 7px;">
        <?php include $this->template_path . 'radio-elm.php'; ?>
      </div>

      <?php $this->_elmDescription(); ?>

      <?php $this->_elmMsgError(); ?>
    </div>
  </div>
</div>

<?php endif; ?>