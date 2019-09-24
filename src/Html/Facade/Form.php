<?php
namespace Webxander\Html\Facade;

use Webxander\Html\Form as HtmlForm;

class Form
{
    public static function open($action, $method = 'GET', $attrs = array())
    {
        $form = new HtmlForm();
        return $form->open($action, $method, $attrs);
    }

    public static function close()
    {
        $form = new HtmlForm();
        return $form->close();
    }
}