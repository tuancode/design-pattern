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
        $expected = HouseBlend::DESCRIPTION.Soy::DESCRIPTION;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['getDescription'])->getMock();
        $beverage->expects($this->once())->method('getDescription')->will($this->returnValue(HouseBlend::DESCRIPTION));

        if ($beverage instanceof AbstractBeverage) {
            $soy = new Soy($beverage);
            $this->assertEquals($expected, $soy->getDescription());
        }
    }

    public function testCost()
    {
        $expected = HouseBlend::COST + SOY::COST;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue(HouseBlend::COST));

        if ($beverage instanceof AbstractBeverage) {
            $soy = new Soy($beverage);
            $this->assertEquals($expected, $soy->cost());
        }
    }
}
