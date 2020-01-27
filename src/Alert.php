<?php

namespace ComponentUI;

ob_start();

class Alert extends Init
{

    public function __construct()
    {
        parent::__construct();
    }

    public function success($message = '')
    {
        $type = 'success';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function primary($message = '')
    {
        $type = 'primary';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function secondary($message = '')
    {
        $type = 'secondary';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function warning($message = '')
    {
        $type = 'warning';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function light($message = '')
    {
        $type = 'light';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function danger($message = '')
    {
        $type = 'danger';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }
}
