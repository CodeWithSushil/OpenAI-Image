<!DOCTYPE html>
<html lang="en">
  <head>
  <title>
<?php
$title = $_SERVER['REQUEST_URI'];
$name = str_replace('/', '', $title);
echo $trim = ucwords($name);
?> | Text-To-Image: OpenAI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@latest/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>
