<?php

namespace CoffeeShop;

/**
 * Class AbstractBeverage.
 */
abstract class AbstractBeverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    /**
     * Get beverage description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Caculate beverage cost.
     *
     * @return float
     */
    abstract public function cost(): float;
}
