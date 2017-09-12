<?php

namespace CoffeeShop\Tests\Unit\Condiment;

use CoffeeShop\AbstractBeverage;
use CoffeeShop\Condiment\Milk;
use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * Milk unit test class.
 */
class MilkTest extends TestCase
{
    public function testDescription()
    {
        $expected = HouseBlend::DESCRIPTION.Milk::DESCRIPTION;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['getDescription'])->getMock();
        $beverage->expects($this->once())->method('getDescription')->will($this->returnValue(HouseBlend::DESCRIPTION));

        if ($beverage instanceof AbstractBeverage) {
            $milk = new Milk($beverage);
            $this->assertEquals($expected, $milk->getDescription());
        }
    }

    public function testCost()
    {
        $expected = HouseBlend::COST + Milk::COST;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue(HouseBlend::COST));

        if ($beverage instanceof AbstractBeverage) {
            $milk = new Milk($beverage);
            $this->assertEquals($expected, $milk->cost());
        }
    }
}
