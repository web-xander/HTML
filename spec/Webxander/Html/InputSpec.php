<?php

namespace spec\Webxander\Html;

use Webxander\Html\Input;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InputSpec extends ObjectBehavior
{
    function it_input_type_text()
    {
        $this->text('foo', 'Webxander')
            ->shouldReturn("<input type='text' name='foo' placeholder='Webxander'/>");
    }

    function it_input_type_checkbox()
    {
        $this->checkbox('foo', 'Webxander')
            ->shouldReturn("<input type='checkbox' name='foo' placeholder='Webxander'/>");
    }
}
