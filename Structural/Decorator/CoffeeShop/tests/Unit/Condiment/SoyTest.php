<?php

namespace CoffeeShop\Tests\Unit\Condiment;

use CoffeeShop\AbstractBeverage;
use CoffeeShop\Condiment\Soy;
use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * Soy unit test class.
 */
class SoyTest extends TestCase
{
    public function testDescription()
    {
        $expected = 'House Blend, Soy';
        $beverage = $this->createMock(HouseBlend::class);
        $soy = new Soy($beverage);

        $this->assertAttributeEquals($expected, 'description', $soy);
    }

    public function testCost()
    {
        $beverageCost = 0.89;
        $soyCost = 0.15;
        $expected = $beverageCost + $soyCost;

        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue($beverageCost));

        if ($beverage instanceof AbstractBeverage) {
            $soy = new Soy($beverage);
            $this->assertEquals($expected, $soy->cost());
        }
    }
}
