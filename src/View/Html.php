<?php

namespace Tourbillon\Response\View;

use Tourbillon\Response\View;
use Exception;

/**
 * Description of Html
 *
 * @author gjean
 */
class Html extends View
{

    public function render()
    {
        ob_start(array(&$this, 'flush'));
        include $this->getFilepath();
        ob_end_flush();
        print ob_get_clean();
    }

    public function flush($buffer)
    {
        $buffer = $this->flushVars($buffer);
        return $buffer;
    }

    public function flushVars($buffer)
    {
        preg_match_all('/{{ *([a-zA-Z0-9_]*) *}}/', $buffer, $matches,  PREG_SET_ORDER);
        foreach ($matches as $match) {
            if (!array_key_exists($match[1], $this->vars)) {
                throw new Exception("Variable " . $match[1] . " does not exist");
            }
            $buffer = str_replace($match[0], $this->vars[$match[1]], $buffer);
        }
        return $buffer;
    }
}
