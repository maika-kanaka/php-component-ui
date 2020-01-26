<select <?php echo $data_live_search; ?> class="form-control <?php echo $this->class['input']; ?>" name="<?php echo $this->name; ?>" <?php echo $this->attr_plus; ?>>
  <?php
    foreach ($this->options as $key => $value):
      $checked = ($value['value'] == $this->value) ? 'selected' : '';
      $attr_sub_text = !empty($value['sub-text']) ? "data-subtext='". $value['sub-text'] ."'" : '';
  ?>

      <option <?php echo $attr_sub_text; ?> value="<?php echo $value['value']; ?>" <?php echo $checked ?>>
        <?php echo $value['label']; ?>
      </option>

  <?php 
    endforeach; 
  ?>
</select>