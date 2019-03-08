<?php

namespace Tourbillon\Response;

use Exception;

/**
 * Description of ViewFactory
 *
 * @author gjean
 */
class ViewFactory
{

    /**
     *
     * @var CustomFactory[]
     */
    private $customFactories;
    
    public function __construct()
    {
        $this->customFactories = array();
    }

    /**
     *
     * @param type $path
     * @return View
     * @throws Exception
     */
    public function create($directory, $path, array $params = array(), $class = null)
    {
        $c = null === $class ? __NAMESPACE__.'\\View\\'.ucfirst(strtolower(pathinfo($this->getPath($directory, $path), PATHINFO_EXTENSION))) : $class;

        if (!class_exists($c)) {
            throw new Exception("Configurator \"$c\" does not exist");
        }
        
        return $this->createInstance($c, $directory, $path, $params);
    }

    private function createInstance($c, $directory, $path, array $params = array()) {
        if ($this->hasCustomFactory($c)) {
            $this->customFactories[$c] = $this->createCustomFactory($c, $directory, $path);
        }

        return new $c($directory, $path, $params);
    }
    
    private function createCustomFactory($class, $directory, $path) {
        $customFactoryClass = $class . 'Factory';
        return new $customFactoryClass($class, $directory, $path);
    }
    
    private function hasCustomFactory($class) {
        return class_exists($class . 'Factory');
    }

    private function getPath($directory, $path)
    {
        return $directory . '/' . rtrim($path);
    }
}
