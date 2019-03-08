<?php

namespace Tourbillon\Response\View;

use Closure;
use Tourbillon\Response\View;
use Tourbillon\Response\View\ExtensionInterface;

/**
 * Description of Html
 *
 * @author gjean
 */
class Php extends View {

    public function setConfig(array $data = array()) {

    }

    public function render() {
        ob_start();
        extract($this->vars);
        include $this->getFilepath();
        ob_end_flush();
        print ob_get_clean();
    }

    public function addPlugin(ExtensionInterface $plugin) {

    }

    public function getNameType() {
        return "Php";
    }

}
