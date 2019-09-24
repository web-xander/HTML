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
}
