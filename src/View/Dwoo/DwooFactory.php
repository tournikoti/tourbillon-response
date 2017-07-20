<?php

namespace Tourbillon\Response\View\Dwoo;

use Dwoo\Core;
use Tourbillon\Response\ViewFactory;

/**
 * Description of Dwoo
 *
 * @author gjean
 */
class DwooFactory extends ViewFactory
{
    private $dwoo;

    public function __construct($filepath, $vars = array())
    {
        $this->dwoo = new Core();
    }

    public function createInstance($c, $path, array $params = array())
    {
        return new $c($path, $params);
    }
}
