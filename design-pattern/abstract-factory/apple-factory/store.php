<?php
spl_autoload_register(function($className) {
    @include($className . '.php');
});

try {
    $iPhone = AppleFactory::make('iPhone7');
    $iPhone->cpu();
    $iPhone->memory();
    $iPhone->battery();
    $iPhone->display();
    $iPhone->color();
} catch (Exception $e) {
    echo $e->getMessage();
}