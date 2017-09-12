<?php

namespace CoffeeShop\Tests\Unit;

use CoffeeShop\HouseBlend;
use PHPUnit\Framework\TestCase;

/**
 * HouseBlend unit test class.
 */
class HouseBlendTest extends TestCase
{
    public function testDescription()
    {
        $houseBlend = new HouseBlend();

        $this->assertAttributeEquals(HouseBlend::DESCRIPTION, 'description', $houseBlend);
    }

    public function testCost()
    {
        $houseBlend = new HouseBlend();

        $this->assertEquals(HouseBlend::COST, $houseBlend->cost());
    }
}
