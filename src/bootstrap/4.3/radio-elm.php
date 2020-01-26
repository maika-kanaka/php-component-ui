<div>
  <?php
    $i = 1;
    foreach ($this->options as $key => $value):
      $checked = ($key == $this->value) ? 'checked' : '';
  ?>
      <label for="radio-<?php echo $this->name; ?>-<?php echo $i; ?>">
        <input type="radio" id="radio-<?php echo $this->name; ?>-<?php echo $i; ?>" name="<?php echo $this->name; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?>>
        <?php echo $value; ?>
      </label>
  <?php 
    $i++;
    endforeach; 
  ?>
</div>