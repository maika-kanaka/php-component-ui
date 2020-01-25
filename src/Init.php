<?php  namespace ComponentUI;

use Form;

class Init
{

    protected $framework = [
        'bootstrap' => ['4.3']
    ];

    protected $template_path;

    public function __construct()
    {
        $config = $this->_loadFileConfig();
        $this->setConfig($config);
    }

    public function setConfig($config = [])
    {
        // choose framework
        if(!isset($config['framework']['name']) || !isset($config['framework']['version'])){
            $this->_showError("CFG0001", "Param framework name & version is required. See documentation");
            return;
        }

        // is available framework ?
        if(array_key_exists( $config['framework']['name'], $this->framework ) === False){
            $this->_showError("CFG0002", "Your selected framework is not available");
            return;
        }

        // is available version ?
        if(in_array($config['framework']['version'], $this->framework[$config['framework']['name']]) === False){
            $this->_showError("CFG0003", "Your selected framework version is not available");
            return;
        }

        // create for template path
        $this->template_path = dirname(__FILE__) ."/". 
                               $config['framework']['name'] ."/". 
                               $config['framework']['version'] ."/";
    }

    protected function _showError($errcode, $errstr)
    {
        echo "<b>ComponentUI Error:</b> [$errcode] $errstr <br>";
        return;
    }

    private function _loadFileConfig()
    {
        include 'config.php';
        return $config;
    }

}