<?php

namespace CoffeeShop;

/**
 * Class Decaf.
 */
class Decaf extends AbstractBeverage
{
    const DESCRIPTION = 'Decaf';
    const COST = 1.05;

    /**
     * Init beverage description.
     */
    public function __construct()
    {
        $this->description = self::DESCRIPTION;
    }

    /**
     * {@inheritdoc}
     */
    public function cost(): float
    {
        return self::COST;
    }
}
