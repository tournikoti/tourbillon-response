<?php

namespace Tourbillon\Response\View\Dwoo;

/**
 * Description of Dwoo
 *
 * @author gjean
 */
class DwooFactory
{
    private $dwoo;

    public function __construct($filepath, $vars = array())
    {
        parent::__construct($filepath, $vars);
        $this->dwoo = new Dwoo_Core();
    }

    public function create()
    {

    }
}
