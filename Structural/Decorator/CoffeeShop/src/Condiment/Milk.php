<?php

namespace CoffeeShop\Condiment;

/**
 * Class Milk.
 */
class Milk extends AbstractCondimentDecorator
{
    const DESCRIPTION = ', Milk';
    const COST = 0.10;

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription().self::DESCRIPTION;
    }

    /**
     * {@inheritdoc}
     */
    public function cost(): float
    {
        return $this->beverage->cost() + self::COST;
    }
}
