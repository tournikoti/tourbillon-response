<?php

namespace Tourbillon\Response\View\Twig;

use Closure;
use Tourbillon\Response\View;
use Tourbillon\Response\View\ExtensionInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Twig extends View {

    private $loader;

    /**
     * @var Environment
     */
    private $twig;

    public function setConfig(array $data = array())
    {
        $this->loader = new FilesystemLoader($data['template_path']);
        $this->twig = new Environment($this->loader, [
            'cache' => $data['compile_path'],
            'debug' => true
        ]);
    }

    public function addPlugin(ExtensionInterface $plugin)
    {
        $this->twig->addExtension($plugin);
    }

    public function getNameType()
    {
        return "Twig";
    }

    public function render()
    {
        $template = $this->twig->load($this->getPath());
        print $template->render($this->getVars());
    }

}