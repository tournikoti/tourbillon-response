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

    public function __construct()
    {
        
    }

    /**
     *
     * @param type $path
     * @return View
     * @throws Exception
     */
    public function create($path, array $params = array(), $class = null)
    {
        $c = null === $class ? __NAMESPACE__.'\\View\\'.ucfirst(strtolower(pathinfo($path, PATHINFO_EXTENSION))) : $class;

        if (!class_exists($c)) {
            throw new Exception("Configurator \"$c\" does not exist");
        }

        return new $c($path, $params);
    }

}
