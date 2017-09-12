<?php

namespace CoffeeShop\Condiment;

use CoffeeShop\AbstractBeverage;

/**
 * Class AbstractCondimentDecorator.
 */
abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @var AbstractBeverage
     */
    protected $beverage;

    /**
     * Init wrapped beverage.
     *
     * @param AbstractBeverage $beverage
     */
    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
