<?php
spl_autoload_register(function ($carousel) {
    include $carousel . '.php';
});


$obj  = new MyClass1();
$obj2 = new MyClass2();
?>