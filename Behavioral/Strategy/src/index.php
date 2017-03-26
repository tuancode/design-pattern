<?php

namespace DesignPattern\Behavioral\Strategy\src;

use DesignPattern\Behavioral\Strategy\src\fly\FlyRocketPowered;

require_once(__DIR__.'/../../../vendor/autoload.php');

// Mallard Duck
$mallardDuck = new MallardDuck();
$mallardDuck->display(); echo "<br />";
$mallardDuck->swim(); echo "<br />";
$mallardDuck->performFly(); echo "<br />";
$mallardDuck->performQuack(); echo "<br />";
echo "<br /><br />";

// Redhead Duck
$redheadDuck = new RedheadDuck();
$redheadDuck->display(); echo "<br />";
$redheadDuck->swim(); echo "<br />";
$redheadDuck->performFly(); echo "<br />";
$redheadDuck->performQuack(); echo "<br />";
echo "<br /><br />";

// Rubber Duck
$rubberDuck = new RubberDuck();
$rubberDuck->display(); echo "<br />";
$rubberDuck->swim(); echo "<br />";
$rubberDuck->performFly(); echo "<br />";
$rubberDuck->performQuack(); echo "<br />";
// Change fly behavior at runtime. A big advantage of "Favor composition over inheritance" principle
// Has-a relation give us a flexible way to change behavior at runtime.
$rubberDuck->setFlyBehavior(new FlyRocketPowered());
$rubberDuck->performFly(); echo "<br />";