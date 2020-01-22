<?php 

namespace ComponentUI;

class Init
{

    protected $framework = [
        'bootstrap' => ['4.3']
    ];

    public function __construct()
    {
        
    }

    public function setConfig()
    {
        // is available framework ?

        // is available version ?

    }

    protected function _showError($errcode, $errstr)
    {
        echo "<b>ComponentUI Error:</b> [$errcode] $errstr <br>";
        return;
    }

}