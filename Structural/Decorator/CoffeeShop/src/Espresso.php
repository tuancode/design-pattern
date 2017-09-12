<?php

namespace CoffeeShop;

/**
 * Class Espresso.
 */
class Espresso extends AbstractBeverage
{
    const DESCRIPTION = 'Espresso';
    const COST = 1.99;

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
