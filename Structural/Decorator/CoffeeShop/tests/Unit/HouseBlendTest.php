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
        $expected = 'House Blend';
        $houseBlend = new HouseBlend();

        $this->assertAttributeEquals($expected, 'description', $houseBlend);
    }

    public function testCost()
    {
        $expected = 0.89;
        $houseBlend = new HouseBlend();

        $this->assertEquals($expected, $houseBlend->cost());
    }
}
