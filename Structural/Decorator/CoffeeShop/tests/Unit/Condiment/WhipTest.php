<?php

namespace CoffeeShop\Tests\Unit\Condiment;

use CoffeeShop\AbstractBeverage;
use CoffeeShop\Condiment\Whip;
use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * Whip unit test class.
 */
class WhipTest extends TestCase
{
    public function testDescription()
    {
        $expected = 'House Blend, Whip';
        $beverage = $this->createMock(HouseBlend::class);
        $whip = new Whip($beverage);

        $this->assertAttributeEquals($expected, 'description', $whip);
    }

    public function testCost()
    {
        $beverageCost = 0.89;
        $whipCost = 0.10;
        $expected = $beverageCost + $whipCost;

        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue($beverageCost));

        if ($beverage instanceof AbstractBeverage) {
            $whip = new Whip($beverage);
            $this->assertEquals($expected, $whip->cost());
        }
    }
}
