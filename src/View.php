<?php

namespace Tourbillon\Response;

use Closure;

abstract class View
{
    protected $templateDirectory;

    protected $path;

    protected $vars;

    public function __construct($directory, $path, $vars = array())
    {
        $this->setTemplateDirectory($directory);
        $this->setPath($path);
        $this->setVars($vars);
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getVars()
    {
        return $this->vars;
    }

    public function getTemplateDirectory()
    {
        return $this->templateDirectory;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function setVars(array $vars)
    {
        $this->vars = $vars;
    }

    public function setTemplateDirectory($directory)
    {
        $this->templateDirectory = $directory;
    }

    public function getFilePath()
    {
        return $this->templateDirectory . '/' . rtrim($this->path);
    }

    public abstract function setConfig(array $data = array());
    
    public abstract function addPlugin($name, Closure $callback);

    public abstract function addFilter(Closure $callback);

    public abstract function getNameType();
    
    public abstract function render();

}
