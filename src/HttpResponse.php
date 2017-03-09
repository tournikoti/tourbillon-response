<?php
/**
 * Ce fichier contient la class HttpResponse
 */

namespace Tourbillon\Response;

use Tourbillon\Response\View;

/**
 * Classe represantant le HttpResponse
 *
 * PHP version 5.3
 *
 * @category   Tourbillon
 * @package    Tourbillon
 * @author     Gwennael Jean <gwennael.jean@gmail.com>
 * @version    1
 *
 */
class HttpResponse {

    /**
     * @var View
     */
    protected $view;

    public function addHeader($header) {
        header($header);
    }

    public function redirect($location) {
        header('Location: ' . $location);
        exit;
    }

    public function redirect404() {
        
    }

    public function render() {
        $this->view->render();
    }

    public function setView(View $view) {
        $this->view = $view;
    }

    public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true) {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }

}
