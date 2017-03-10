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
    public static function create($path, array $params = array(), $class = null)
    {
        $c = null === $class
            ? __NAMESPACE__ . '\\View\\' . ucfirst(strtolower(pathinfo($path, PATHINFO_EXTENSION)))
            : $class;

        if (!class_exists($c)) {
            throw new Exception("Configurator $c does not exist");
        }

        return new $c($path, $params);
    }
}
