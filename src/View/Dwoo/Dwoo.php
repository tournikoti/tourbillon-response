<?php

namespace Tourbillon\Response\View\Dwoo;

use Dwoo_Core;
use Dwoo_Data;
use Dwoo_Template_File;
use Tourbillon\Response\View;

/**
 * Description of Dwoo
 *
 * @author gjean
 */
class Dwoo extends View
{
    private $dwoo;

    public function __construct($filepath, $vars = array())
    {
        parent::__construct($filepath, $vars);
        $this->dwoo = new Dwoo_Core();
    }

    public function render()
    {
        $tpl = new Dwoo_Template_File($this->getFilepath());
        $this->dwoo->output($tpl, $this->getData());
    }

    private function getData()
    {
        $data = new Dwoo_Data();
        foreach ($this->getVars() as $key => $value) {
            $data->assign($key, $value);
        }
        return $data;
    }

}