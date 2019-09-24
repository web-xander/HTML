<?php

namespace Webxander\Html;

use InvalidArgumentException;

class Form extends Html
{
    protected $formMethods = ['GET', 'POST', 'PUT', 'PATH', 'DELETE'];

    public function open($action, $method = 'GET', $attrs = array())
    {

    if (!in_array($method,$this->formMethods))
      throw new InvalidArgumentException('Method not found.');

    $attributes = $this->parseAttributes($attrs);

    return "<form action='$action' method='$method'$attributes>";
    }

    public function close()
    {
        return "</form>";
    }
}
