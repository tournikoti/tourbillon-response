<?php

namespace Tourbillon\Response\View\Dwoo;

use Dwoo\Core;
use Dwoo\Template\File;
use Tourbillon\Response\View;
use Dwoo\Data;

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
        $this->dwoo = new Core();
    }

    public function render()
    {
        $tpl = new File($this->getFilepath());
        print $this->dwoo->get($tpl, $this->getData());
    }

    private function getData()
    {
        $data = new Data();
        foreach ($this->getVars() as $key => $value) {
            $data->assign($key, $value);
        }
        return $data;
    }

}
