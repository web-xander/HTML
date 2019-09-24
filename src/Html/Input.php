<?php

namespace Webxander\Html;

class Input extends Html
{
    public function text($name, $placeholder = null, $attrs = array())
    {
        $attrs = ['name' => $name];

        return $this->input('text', $placeholder, $attrs);
    }
}
