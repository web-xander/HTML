---
title: Class HTML
lang: en-US
---

# Intro for Class HTML

## Helper link

### Enlaces normales.
Para generar un link, escriba en su template

``` php
// Input
Html::link('https://webxander.com', 'Webxander');

// Output: <a href="https://webxander.com">Webxander</a>
```
Output: <a href="https://webxander.com">Webxander</a>

### Enlaces sin titulo.

Puede generar un link sin titulo.

``` php
// Input
Html::link('https://webxander.com');

// Output: <a href="https://webxander.com">https://webxander.com</a>
```
Output: <a href="https://webxander.com">https://webxander.com</a>

### Enlaces con atributos.

Puede generar un link con atributos.

``` php
// Input
Html::link('https://webxander.com', null, ['class' => 'btn btn-primary', 'id' => 'link']);

// Output: <a href='https://webxander.com' class='btn btn-primary' id='link'>https://webxander.com</a>
```
Output: <a href='https://webxander.com' class='btn btn-primary' id='link'>https://webxander.com</a>

::: tip A tener en cuenta
Puedes combinar ambas opciones, es decir, generar link con titulo y con atributos.
:::

## Helper Image

### Imagen con titulo.

Puede generar una imagen con titulo alternativo.

``` php
// Input
Html::image('https://picsum.photos/id/651/200/300', 'Example image');

// Output: <img src='https://picsum.photos/id/651/200/300' alt='Example image'/>
```
Output: 

<img src='https://picsum.photos/id/651/200/300' alt='Example image'/>

### Imagen con titulo y atributos.

Puede generar una imagen con titulo alternativo y atributos extras.

``` php
// Input
Html::image('https://picsum.photos/id/650/200/300', 'Example image', ['class' => 'img-thumbnail', 'id' => 'image']);

// Output: <img src='https://picsum.photos/id/650/200/300' alt='Example image' class='img-thumbnail' id='image'/>
```
Output: 

<img src='https://picsum.photos/id/650/200/300' alt='Example image' class='img-thumbnail' id='image'/>