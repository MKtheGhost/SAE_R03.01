<?php
  
  //get the name of the current directory
  $path = dirname(__FILE__);
  $pieces = explode("\\", $path);
  $directoryName = $pieces[count($pieces) - 1];
  
  //set the navigation path according to the current directory ( 2 cases only here)
  if ($directoryName == "SAE_R03.01") {
    $navigationPath = "./";
  } elseif ($directoryName == "pages") {
    $navigationPath = "./../../";
  }

echo <<< HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
HTML;

echo PHP_EOL.'<link href="'.$navigationPath.'style.css" rel="stylesheet"  type="text/css">'.PHP_EOL;