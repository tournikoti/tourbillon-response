<?php

namespace Tourbillon\Response\View;

use Tourbillon\Response\View;

/**
 * Description of Html
 *
 * @author gjean
 */
class Php extends View
{

    public function render()
    {
        ob_start();
        extract($this->vars);
        include $this->getFilepath();
        ob_end_flush();
        print ob_get_clean();
    }

}
