<?php 

namespace ComponentUI;

class Modal extends Init
{

    private $id;

    private $title;
    private $description;
    private $reason_placeholder;
    private $show_reason;

    private $action;
    private $csrf;
    private $button;

    public function confirmation($param = [])
    {
        $this->_setParamDefault($param);

        include $this->template_path . 'modal.php';
    }

    private function _setParamDefault($param = [])
    {
        $this->csrf               = !empty($param['csrf']) ? $param['csrf'] : '';

        $this->id                 = !empty($param['id']) ? $param['id'] : '';
        $this->title              = !empty($param['title']) ? $param['title'] : 'Confirmation Delete';
        $this->description        = !empty($param['description']) ? $param['description'] : 'Are you sure to delete this data ?';
        $this->reason_placeholder = !empty($param['reason_placeholder']) ? $param['reason_placeholder'] : '';
        $this->show_reason        = !empty($param['show_reason']) ? $param['show_reason'] : false;
        $this->action             = !empty($param['action']) ? $param['action'] : '';
        $this->button             = !empty($param['button']) ? $param['button'] : [
            'yes' => ['text' => 'Yes', 'class' => 'btn-danger'],
            'no' => ['text' => 'No', 'class' => 'btn-secondary']
        ];
    }

}