<?php

namespace CoffeeShop\Tests\Functional;

use CoffeeShop\Condiment\Mocha;
use CoffeeShop\Condiment\Soy;
use CoffeeShop\Condiment\Whip;
use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * CoffeeShop functional test class.
 */
class CoffeeShopTest extends TestCase
{
    public function testGetCoffeeBillForHouseBlendSoyMochaWhip()
    {
        $expectedBill = 'House Blend, Soy, Milk, Mocha, Whip: $1.44';

        $beverage = new HouseBlend();
        $beverage = new Soy($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        $bill = sprintf('%s: $%s', $beverage->getDescription(), $beverage->cost());

        $this->assertEquals($expectedBill, $bill);
    }
}
