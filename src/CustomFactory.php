<?php

namespace Tourbillon\Response;

/**
 * Description of CustomFactory
 *
 * @author gjean
 */
interface CustomFactory {
    
    public function createInstance($c, $path, array $params = array());
    
}
