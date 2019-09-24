<?php

namespace Webxander\Html;

use InvalidArgumentException;

class Form extends Html
{
  protected $formMethods = ['GET', 'POST', 'PUT', 'PATH', 'DELETE'];

  public function open($action, $method = 'GET', $attrs = array())
  {

    if (!in_array($method, $this->formMethods))
      throw new InvalidArgumentException('Method not found.');

    $attrs = array('action' => $action, 'method' => $method) + $attrs;

    return $this->build('form', $attrs, true);
  }

  public function close()
  {
    return $this->build('form', null, false);
  }
}
