<?php


spl_autoload_register('myAutoLoader');

function myAutoLoader($classname) {
$path = "Class/";
$extension = ".php";
$fullpath = $path . $classname . $extension;

include_once $fullpath;

}

