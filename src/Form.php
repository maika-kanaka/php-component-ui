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

    public function input($param = [])
    {
        $this->_setDefaultParam($param);

        $this->type = !empty($param['type']) ? $param['type'] : 'text';

        include $this->template_path . "input.php";

        // reset param to default
        $this->_setDefaultParam([]);
    }

    public function textarea($param = [])
    {
        $this->_setDefaultParam($param);

        include $this->template_path . "textarea.php";

        // reset param to default
        $this->_setDefaultParam([]);
    }

    public function radio($param = [])
    {
        $this->_setDefaultParam($param);

        $this->options = !empty($param['options']) ? $param['options'] : [];

        include $this->template_path . "radio.php";

        // reset param to default
        $this->_setDefaultParam([]);
    }

    public function checkbox($param = [])
    {
        $this->_setDefaultParam($param);

        $this->options = !empty($param['options']) ? $param['options'] : [];
        $selected_by = !empty($param['selected_by']) ? $param['selected_by'] : 'value';

        include $this->template_path . "checkbox.php";

        // reset param to default
        $this->_setDefaultParam([]);
    }

    public function dropdown($param = [])
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

        // reset param to default
        $this->_setDefaultParam([]);
    }

    private function _setDefaultParam($param = [])
    {
        $this->name = !empty($param['name']) ? $param['name'] : '';
        $this->value = !empty($param['value']) ? $param['value'] : '';
        $this->attr_plus = !empty($param['attr_plus']) ? $param['attr_plus'] : '';
        $this->label = !empty($param['label']) ? $param['label'] : '';
        $this->placeholder = !empty($param['placeholder']) ? $param['placeholder'] : '';
        $this->view_type = !empty($param['view_type']) ? $param['view_type'] : '';
        $this->class['input'] = !empty($param['class']['input']) ? $param['class']['input'] : '';

        $this->description = !empty($param['description']) ? $param['description'] : '';
        $this->message_error = !empty($param['message_error']) ? $param['message_error'] : '';
    }

    private function _elmMsgError()
    {
        if(!empty($this->message_error)):
            echo '<div class="invalid-feedback" style="display: block;">';
            echo $this->message_error;
            echo '</div>';
        endif; 
    }

    private function _elmDescription()
    {
        if(!empty($this->description)):
            echo '<small class="form-text text-muted">';
            echo $this->description; 
            echo '</small>';
        endif; 
    }

}