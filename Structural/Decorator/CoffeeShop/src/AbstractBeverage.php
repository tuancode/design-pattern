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
     * @return int
     */
    abstract public function cost(): int;
}
