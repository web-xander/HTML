<?php

namespace Webxander\Html;

class Input extends Html
{
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
