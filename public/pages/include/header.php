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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
