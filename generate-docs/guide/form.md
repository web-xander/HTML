---
title: Class Form
lang: en-US
---

# Intro for Class Form

## Helper form

### Abrir formulario.
Para generar un formulario, escriba en su template

``` php
// Input
Form::open('register.php', 'POST');

// Output: <form action='register.php' method='POST'>
```

> Nota: Si ingresa un metodo no existente, le arrojara una excepcion

### Cerrar formulario.
Para cerrar el formulario, solamente debe escribir

``` php
// Input
Form::close();

// Output: </form>
```