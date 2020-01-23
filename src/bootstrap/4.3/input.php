<?php
    if($this->view_type == ''):
?>

<div class="form-group">
    <label> <?php echo $this->label; ?> </label>

    <input class="form-control <?php echo $this->class['input']; ?>" value="<?php echo $this->value; ?>" name="<?php echo $this->name; ?>" placeholder="<?php echo $this->placeholder; ?>" type="<?php echo $this->type; ?>" <?php echo $this->attr_plus; ?>>

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
        <input class="form-control <?php echo $this->class['input']; ?>" value="<?php echo $this->value; ?>" name="<?php echo $this->name; ?>" placeholder="<?php echo $this->placeholder; ?>" type="<?php echo $this->type; ?>" <?php echo $this->attr_plus; ?>>

        <?php $this->_elmDescription(); ?>

        <?php $this->_elmMsgError(); ?>
    </div>
</div>

<?php 
    endif; 
?>