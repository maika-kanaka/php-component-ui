<?php 

namespace ComponentUI;

class Form extends Init
{

    private $type = [
        'text', 
        'number',
        'textarea',
        'dropdown',
        'radio',
        'checkbox'
    ];
    private $name;
    private $value;
    private $attr_plus;
    private $view_type;

    public function __construct($config = [])
    {
        // type
        if(!isset($config['type']) || $this->type[$config['type']]){
            return $this->_showError("FT0001", "Your selected framework is not available");
        }

        // 
    }

    public function input()
    {
        
    }

}