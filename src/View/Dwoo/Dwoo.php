<?php

namespace Tourbillon\Response\View\Dwoo;

use Closure;
use Dwoo\Core;
use Dwoo\Data;
use Dwoo\Template\File;
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

    public function addFilter(Closure $callback) {
        $this->dwoo->addFilter($callback);
    }

    public function addPlugin($name, Closure $callback) {
        $this->dwoo->addPlugin($name, $callback);
    }

    public function getNameType() {
        return "Dwoo";
    }

}
