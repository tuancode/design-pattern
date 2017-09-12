<?php

namespace CoffeeShop\Condiment;

/**
 * Class Whip.
 */
class Whip extends AbstractCondimentDecorator
{
    const DESCRIPTION = ', Whip';
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
