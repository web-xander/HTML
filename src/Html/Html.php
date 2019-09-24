<?php

namespace Webxander\Html;

use InvalidArgumentException;

class Html
{
    protected $attributes = '';

    protected $inputTypes = [
        "button",
        "checkbox",
        "color",
        "date",
        "datetime-local",
        "email",
        "file",
        "hidden",
        "image",
        "month",
        "number",
        "password",
        "radio",
        "range",
        "reset",
        "search",
        "submit",
        "tel",
        "text",
        "time",
        "url",
        "week"
      ];

    public function link($url, $name = null, $attrs = array())
  {
      
    $name = $name ?? $url;

    $this->attributes = $this->parseAttributes($attrs);

    return "<a href='$url'$this->attributes>$name</a>";
  }

  public function input($type, $placeholder = null, $attrs = array())
  {

    if (!in_array($type,$this->inputTypes))
      throw new InvalidArgumentException('Input type incorrect.');

    $this->attributes = $this->parseAttributes($attrs);

    $placeholderInput = '';
    if($placeholder){
      $placeholderInput = " placeholder='$placeholder'";
    }

    return "<input type='$type'$this->attributes$placeholderInput/>";
  }

  public function image($src, $alt = null, $attrs = array())
  {

    $this->attributes = $this->parseAttributes($attrs);

    return "<img src='$src' alt='$alt'$this->attributes/>";
  }

  public function select($name, $options = array(), $attrs = array())
  {

    $this->attributes = $this->parseAttributes($attrs);

    $parseOptions = '';
    foreach ($options as $key => $value) {
      $parseOptions .= "<option value='$key'>$value</option>";
    }

    return "<select name='$name'$this->attributes>$parseOptions</select>";
  }

    protected function parseAttributes($attrs = array())
    {
        foreach ($attrs as $key => $value) {
        $this->attributes .= " $key='$value'";
        }

        return $this->attributes;
    }
}
