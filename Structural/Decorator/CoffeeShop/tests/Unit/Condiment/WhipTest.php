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
        $expected = HouseBlend::DESCRIPTION.Whip::DESCRIPTION;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['getDescription'])->getMock();
        $beverage->expects($this->once())->method('getDescription')->will($this->returnValue(HouseBlend::DESCRIPTION));

        if ($beverage instanceof AbstractBeverage) {
            $whip = new Whip($beverage);
            $this->assertEquals($expected, $whip->getDescription());
        }
    }

    public function testCost()
    {
        $expected = HouseBlend::COST + Whip::COST;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue(HouseBlend::COST));

        if ($beverage instanceof AbstractBeverage) {
            $whip = new Whip($beverage);
            $this->assertEquals($expected, $whip->cost());
        }
    }
}
