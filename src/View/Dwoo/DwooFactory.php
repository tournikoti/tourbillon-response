<?php

namespace Tourbillon\Response\View\Dwoo;

use Dwoo\Core;
use Tourbillon\Response\CustomFactory;

/**
 * Description of Dwoo
 *
 * @author gjean
 */
class DwooFactory implements CustomFactory
{
    private $dwoo;

    public function __construct($filepath, $vars = array())
    {
        $this->dwoo = new Core();
    }

    public function createInstance($c, $path, array $params = array())
    {
        dump($this->dwoo->get($path)); exit;
        return new $c($path, $params);
    }
}
