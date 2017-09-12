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
        $expected = 'House Blend, Milk';
        $beverage = $this->createMock(HouseBlend::class);
        $milk = new Milk($beverage);

        $this->assertAttributeEquals($expected, 'description', $milk);
    }

    public function testCost()
    {
        $beverageCost = 0.89;
        $milkCost = 0.10;
        $expected = $beverageCost + $milkCost;

        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue($beverageCost));

        if ($beverage instanceof AbstractBeverage) {
            $milk = new Milk($beverage);
            $this->assertEquals($expected, $milk->cost());
        }
    }
}
