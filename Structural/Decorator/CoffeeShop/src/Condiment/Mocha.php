<?php

namespace CoffeeShop\Condiment;

/**
 * Class Mocha.
 */
class Mocha extends AbstractCondimentDecorator
{
    const DESCRIPTION = ', Mocha';
    const COST = 0.20;

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
