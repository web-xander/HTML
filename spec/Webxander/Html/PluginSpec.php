<?php

namespace spec\Webxander\Html;

use Webxander\Html\Plugin;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Plugin::class);
    }
}
