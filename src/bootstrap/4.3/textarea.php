<?php
    if($this->view_type == ''):
?>

<div class="form-group">
    <label> <?php echo $this->label; ?> </label>

    <?php include $this->template_path . 'textarea-elm.php'; ?>

    <?php $this->_elmDescription(); ?>

    <?php $this->_elmMsgError(); ?>
</div>

<?php 
    elseif($this->view_type == 'horizontal'):
?>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">
        <?php echo $this->label; ?>
    </label>

    <div class="col-sm-8">
        <?php include $this->template_path . 'textarea-elm.php'; ?>

        <?php $this->_elmDescription(); ?>

        <?php $this->_elmMsgError(); ?>
    </div>
</div>

<?php 
    endif; 
?>