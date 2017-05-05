<?php

require __DIR__ . "../../vendor/autoload.php";



class MyType extends \Doctrine\DBAL\Types\TextType
{

}

$mt = new MyType();