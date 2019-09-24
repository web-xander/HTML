<?php

namespace spec\Webxander\Html;

use Webxander\Html\Html;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HtmlSpec extends ObjectBehavior
{
    function it_html_tag_link()
    {
        $this->link('https://webxander.com', 'Webxander')
            ->shouldReturn("<a href='https://webxander.com'>Webxander</a>");
    }
}
