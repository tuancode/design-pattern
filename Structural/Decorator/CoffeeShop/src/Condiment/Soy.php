<?php

namespace CoffeeShop\Condiment;

/**
 * Class Soy.
 */
class Soy extends AbstractCondimentDecorator
{
    const DESCRIPTION = ', Soy';
    const COST = 0.15;

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
