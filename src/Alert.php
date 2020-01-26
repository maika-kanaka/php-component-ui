<?php

namespace ComponentUI;

ob_start();

class Alert extends Init
{

    public function __construct()
    {
        parent::__construct();
    }

    public function success($message = ''): string
    {
        $type = 'success';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function primary($message = ''): string
    {
        $type = 'primary';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function secondary($message = ''): string
    {
        $type = 'secondary';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function warning($message = ''): string
    {
        $type = 'warning';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function light($message = ''): string
    {
        $type = 'light';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }

    public function danger($message = ''): string
    {
        $type = 'danger';
        include $this->template_path . "alert.php";
        return ob_get_clean();
    }
}
