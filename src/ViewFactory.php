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
     * @param type $path
     * @return View
     * @throws Exception
     */
    public static function createInstance($path, array $params = array())
    {
        $class = __NAMESPACE__ . '\\View\\' . ucfirst(strtolower(pathinfo($path, PATHINFO_EXTENSION)));

        if (!class_exists($class)) {
            throw new Exception("Configurator $class does not exist");
        }

        return new $class($path, $params);
    }
}
