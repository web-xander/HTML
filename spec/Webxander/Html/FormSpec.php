<?php

namespace spec\Webxander\Html;

use Webxander\Html\Form;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormSpec extends ObjectBehavior
{
    function it_form_tag_open()
    {
        $this->open("register.php", "POST")
            ->shouldReturn("<form action='register.php' method='POST'>");
    }

    function it_form_tag_close()
    {
        $this->close()
            ->shouldReturn("</form>");
    }
}
