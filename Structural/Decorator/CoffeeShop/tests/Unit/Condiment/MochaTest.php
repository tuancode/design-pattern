<?php

namespace CoffeeShop\Tests\Unit\Condiment;

use CoffeeShop\AbstractBeverage;
use CoffeeShop\Condiment\Mocha;
use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * Mocha unit test class.
 */
class MochaTest extends TestCase
{
    public function testDescription()
    {
        $expected = HouseBlend::DESCRIPTION.Mocha::DESCRIPTION;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['getDescription'])->getMock();
        $beverage->expects($this->once())->method('getDescription')->will($this->returnValue(HouseBlend::DESCRIPTION));

        if ($beverage instanceof AbstractBeverage) {
            $mocha = new Mocha($beverage);
            $this->assertEquals($expected, $mocha->getDescription());
        }
    }

    public function testCost()
    {
        $expected = HouseBlend::COST + Mocha::COST;
        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue(HouseBlend::COST));

        if ($beverage instanceof AbstractBeverage) {
            $mocha = new Mocha($beverage);
            $this->assertEquals($expected, $mocha->cost());
        }
    }
}
