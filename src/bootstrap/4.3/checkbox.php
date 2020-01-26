<div class="form-group">
      <label> <?php echo $this->label; ?> </label>
      
      <?php if($this->view_type == 'row'): ?>
      <div class='list-radio'>
      <?php elseif($this->view_type == 'inline'): ?>
      <div style="display: inline; margin-right: 5px;">
      <?php endif; ?>

      <?php
        $idx = 1;
        foreach ($this->options as $key => $value):

          if($selected_by == 'value'){
            $checked = (in_array($value['value'], $this->value)) ? 'checked' : '';
          }else if($selected_by == 'label'){
            $checked = (in_array($value['label'], $this->value)) ? 'checked' : '';
          }else{
            $checked = '';
          }
      ?>

          <label for="checkbox-<?php echo $this->name; ?>-<?php echo $idx; ?>">
            <input type="checkbox" id="checkbox-<?php echo $this->name; ?>-<?php echo $idx; ?>" name="<?php echo $this->name; ?>" value="<?php echo $value['value']; ?>" <?php echo $checked; ?>>
            <?php echo $value['label']; ?>
          </label>

      <?php
        $idx++;
        endforeach;
      ?>
      </div>

      <?php $this->_elmDescription(); ?>

      <?php $this->_elmMsgError(); ?>
    </div>