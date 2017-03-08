<?php

namespace Tourbillon\Response;

abstract class View
{
    protected $filepath;
    protected $vars;

    public function __construct($filepath, $vars = array())
    {
        $this->setFilepath($filepath);
        $this->setVars($vars);
    }

    public function getFilepath()
    {
        return $this->filepath;
    }

    public function getVars()
    {
        return $this->vars;
    }

    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

    public function setVars(array $vars)
    {
        $this->vars = $vars;
    }

    public abstract function render();

}
