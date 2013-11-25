<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
require('data.php');

//var_dump($myArray);
echo '<br />';

//foreach ($myArray as $person)
//    {
//        echo 'Name: '.$person.'<br />'.PHP_EOL;
//    }
//
//echo $person; 

$namelist = implode( ', ', $myArray);

echo 'Names: '.$namelist.'<br />'.PHP_EOL;