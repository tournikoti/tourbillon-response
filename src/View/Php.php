<?php

namespace Tourbillon\Response\View;

use Closure;
use Tourbillon\Response\View;

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

    public function addFilter(Closure $callback) {
        
    }

    public function addPlugin($name, Closure $callback) {
        
    }

    public function getNameType() {
        return "Php";
    }

}
