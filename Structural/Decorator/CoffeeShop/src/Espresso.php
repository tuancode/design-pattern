<?php

namespace CoffeeShop;

/**
 * Class Espresso.
 */
class Espresso extends AbstractBeverage
{
    const COST = 1.99;

    /**
     * Init beverage description.
     */
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function cost(): int
    {
        // TODO: Implement cost() method.
    }
}
