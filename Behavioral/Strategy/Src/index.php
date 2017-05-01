<?php

namespace DesignPattern\Behavioral\Strategy\Src;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;

require_once __DIR__.'/../../../vendor/autoload.php';

// Mallard Duck
$mallardDuck = new MallardDuck();
echo $mallardDuck->display();
echo '<br />';
echo $mallardDuck->swim();
echo '<br />';
echo $mallardDuck->performFly();
echo '<br />';
echo $mallardDuck->performQuack();
echo '<br />';
echo '<br /><br />';

// Redhead Duck
$redheadDuck = new RedheadDuck();
echo $redheadDuck->display();
echo '<br />';
echo $redheadDuck->swim();
echo '<br />';
echo $redheadDuck->performFly();
echo '<br />';
echo $redheadDuck->performQuack();
echo '<br />';
echo '<br /><br />';

// Rubber Duck
$rubberDuck = new RubberDuck();
echo $rubberDuck->display();
echo '<br />';
echo $rubberDuck->swim();
echo '<br />';
echo $rubberDuck->performFly();
echo '<br />';
echo $rubberDuck->performQuack();
echo '<br />';
// Change fly behavior at runtime. A big advantage of "Favor composition over inheritance" principle
// Has-a relation give us a flexible way to change behavior at runtime.
$rubberDuck->setFlyBehavior(new FlyRocketPowered());
echo $rubberDuck->performFly();
echo '<br />';
