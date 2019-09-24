<?php
namespace Webxander\Tests;

use Webxander\Html\Facade\Form;
use Webxander\Html\Facade\Html;
use InvalidArgumentException;

class HtmlTest extends TestCase
{
    public function test_html_link()
    {
        $link = Html::link('https://webxander.com', 'Webxander');

        $this->assertSame(
            "<a href='https://webxander.com'>Webxander</a>",
            $link
        );
    }

    public function test_html_link_without_title()
    {
        $link = Html::link('https://webxander.com');

        $this->assertSame(
            "<a href='https://webxander.com'>https://webxander.com</a>",
            $link
        );
    }

    public function test_html_link_with_attributes()
    {
        $link = Html::link('https://webxander.com', null, ['class' => 'btn btn-link', 'id' => 'link']);

        $this->assertSame(
            "<a href='https://webxander.com' class='btn btn-link' id='link'>https://webxander.com</a>",
            $link
        );
    }

    public function test_html_link_with_attributes_and_title()
    {
        $link = Html::link('https://webxander.com', 'Webxander', ['class' => 'btn btn-link', 'id' => 'link']);

        $this->assertSame(
            "<a href='https://webxander.com' class='btn btn-link' id='link'>Webxander</a>",
            $link
        );
    }

    public function test_html_input_with_attributes_and_title()
    {
        $input = Html::input('text', 'Webxander', ['name' => 'name', 'id' => 'name']);

        $this->assertSame(
            "<input type='text' name='name' id='name' placeholder='Webxander'/>",
            $input
        );
    }

    public function test_html_input_with_title()
    {
        $input = Html::input('text', 'Webxander');

        $this->assertSame(
            "<input type='text' placeholder='Webxander'/>",
            $input
        );
    }

    public function test_html_input()
    {
        $input = Html::input('text');

        $this->assertSame(
            "<input type='text'/>",
            $input
        );
    }

    public function test_html_select_with_attributes()
    {
        
        $options = [
            0 => 'Argentina',
            1 => 'Brasil',
            2 => 'Chile',
            3 => 'Ecuador',
            4 => 'Venezuela'
        ];
        
        $input = Html::select('countries', $options, ['class' => 'form-control', 'id' => 'countries']);

        $this->assertSame(
            "<select name='countries' class='form-control' id='countries'><option value='0'>Argentina</option><option value='1'>Brasil</option><option value='2'>Chile</option><option value='3'>Ecuador</option><option value='4'>Venezuela</option></select>",
            $input
        );
    }

    public function test_html_select()
    {
        
        $options = [
            0 => 'Argentina',
            1 => 'Brasil',
            2 => 'Chile',
            3 => 'Ecuador',
            4 => 'Venezuela'
        ];
        
        $input = Html::select('countries', $options);

        $this->assertSame(
            "<select name='countries'><option value='0'>Argentina</option><option value='1'>Brasil</option><option value='2'>Chile</option><option value='3'>Ecuador</option><option value='4'>Venezuela</option></select>",
            $input
        );
    }

    public function test_html_image()
    {
        
        $input = Html::image('image.jpg', 'Example image');

        $this->assertSame(
            "<img src='image.jpg' alt='Example image'/>",
            $input
        );
    }

    public function test_html_image_with_attributes()
    {
        
        $input = Html::image('image.jpg', 'Example image', ['class' => 'image', 'id' => 'image']);

        $this->assertSame(
            "<img src='image.jpg' alt='Example image' class='image' id='image'/>",
            $input
        );
    }

    public function test_html_input_with_type_incorrect()
    {
        $this->expectException(InvalidArgumentException::class);
        
        $input = Html::input('pepe');
    }

    public function test_html_form_open()
    {
        $input = Form::open('register.php', 'POST');

        $this->assertSame(
            "<form action='register.php' method='POST'>",
            $input
        );
    }

    public function test_html_form_close()
    {
        $input = Form::close();

        $this->assertSame(
            "</form>",
            $input
        );
    }
}
