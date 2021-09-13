<?php 

define("ROOT", ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);

function dump($data) 
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}