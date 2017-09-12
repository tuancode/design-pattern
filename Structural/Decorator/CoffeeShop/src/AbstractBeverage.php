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
    protected $description;

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
