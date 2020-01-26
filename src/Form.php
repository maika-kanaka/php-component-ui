<?php 

namespace ComponentUI;

class Form extends Init
{

    private $name; 
    private $value; // value or selected or checked
    private $attr_plus;
    private $placeholder;

    // special for input
    private $type;

    // special for dropdown
    private $options;

    // for view 
    private $class = [
        'input' => ''
    ];
    private $label;
    private $view_type = '';

    // element support 
    private $description;
    private $message_error;

    public function __construct()
    {
        parent::__construct();
    }

    public function input($param = []): void
    {
        $this->_setDefaultParam($param);

        $this->type = !empty($param['type']) ? $param['type'] : 'text';

        include $this->template_path . "input.php";
    }

    public function textarea($param = []): void
    {
        $this->_setDefaultParam($param);

        include $this->template_path . "input.php";
    }

    public function radio($param = []): void
    {
        $this->_setDefaultParam($param);

        $this->options = !empty($param['options']) ? $param['options'] : [];

        include $this->template_path . "radio.php";
    }

    public function checkbox($param = []): void
    {
        $this->_setDefaultParam($param);

        $this->options = !empty($param['options']) ? $param['options'] : [];
        $selected_by = !empty($param['selected_by']) ? $param['selected_by'] : 'value';

        include $this->template_path . "checkbox.php";
    }

    public function dropdown($param = []): void
    {
        $this->_setDefaultParam($param);

        $this->options = !empty($param['options']) ? $param['options'] : [];
        if( !empty($param['data_live_search']) && $param['data_live_search'] === True ){
            $data_live_search = 'data-live-search="true"';
            $this->class['input'] .= " chosen-select selectpicker";
        }else{
            $data_live_search = "";
        }

        include $this->template_path . "dropdown.php";
    }

    private function _setDefaultParam($param = []): void
    {
        $this->name = !empty($param['name']) ? $param['name'] : '';
        $this->value = !empty($param['value']) ? $param['value'] : '';
        $this->attr_plus = !empty($param['attr_plus']) ? $param['attr_plus'] : '';
        $this->label = !empty($param['label']) ? $param['label'] : '';
        $this->view_type = !empty($param['view_type']) ? $param['view_type'] : '';
        $this->class['input'] = !empty($param['class']['input']) ? $param['class']['input'] : '';
        if(isset($param['description'])) $this->description = $param['description'];
        if(isset($param['message_error'])) $this->message_error = $param['message_error'];
    }

    private function _elmMsgError(): void
    {
        if(!empty($this->message_error)):
            echo '<div class="invalid-feedback" style="display: block;">';
            echo $this->message_error;
            echo '</div>';
        endif; 
    }

    private function _elmDescription(): void
    {
        if(!empty($this->description)):
            echo '<small class="form-text text-muted">';
            echo $this->description; 
            echo '</small>';
        endif; 
    }

}