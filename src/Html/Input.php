<?php

namespace Webxander\Html;

class Input extends Html
{
    public function text($name, $placeholder = null, $attrs = array())
    {
        $attrs = ['name' => $name];

        return $this->input('text', $placeholder, $attrs);
    }

    public function __call(string $name , array $arguments):string
    {
        $arguments = $this->parseInputName($arguments);

        return $this->input($name, $arguments[1], $arguments[2] ?? array());
    }

    public function parseInputName($arguments)
    {
        $attrs = ['name' => $arguments[0]];
        if(isset($arguments[2]))
            $arguments[2] = $attrs + $arguments[2];
        else
            $arguments[2] = $attrs;

        return $arguments;
    }
}
