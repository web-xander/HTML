<?php
namespace Webxander\Html\Facade;

use Webxander\Html\Html as HtmlParse;

class Html
{
    public static function link($url, $name = null, $attrs = array())
  {

    $html = new HtmlParse();

    return $html->link($url, $name, $attrs);

  }

  public static function input($type, $placeholder = null, $attrs = array())
  {

    $html = new HtmlParse();

    return $html->input($type, $placeholder, $attrs);
  }

  public static function image($src, $alt = null, $attrs = array())
  {
    $html = new HtmlParse();

    return $html->image($src, $alt, $attrs);
  }

  public static function select($name, $options = array(), $attrs = array())
  {

    $html = new HtmlParse();

    return $html->select($name, $options, $attrs);

  }
}