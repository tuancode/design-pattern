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
        $expected = 'House Blend, Mocha';
        $beverage = $this->createMock(HouseBlend::class);
        $mocha = new Mocha($beverage);

        $this->assertAttributeEquals($expected, 'description', $mocha);
    }

    public function testCost()
    {
        $beverageCost = 0.89;
        $mochaCost = 0.20;
        $expected = $beverageCost + $mochaCost;

        $beverage = $this->getMockBuilder(HouseBlend::class)->setMethods(['cost'])->getMock();
        $beverage->expects($this->once())->method('cost')->will($this->returnValue($beverageCost));

        if ($beverage instanceof AbstractBeverage) {
            $mocha = new Mocha($beverage);
            $this->assertEquals($expected, $mocha->cost());
        }
    }
}
