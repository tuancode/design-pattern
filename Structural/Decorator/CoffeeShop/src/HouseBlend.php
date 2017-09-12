<?php

namespace CoffeeShop;

/**
 * Class HouseBlend.
 */
class HouseBlend extends AbstractBeverage
{
    const DESCRIPTION = 'House Blend';
    const COST = 0.89;

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
