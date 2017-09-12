<?php

namespace CoffeeShop;

/**
 * Class DarkRoast.
 */
class DarkRoast extends AbstractBeverage
{
    const DESCRIPTION = 'Dark Roast';
    const COST = 0.99;

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
