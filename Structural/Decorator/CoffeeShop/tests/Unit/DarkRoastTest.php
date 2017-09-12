<?php

namespace CoffeeShop\Tests\Unit;

use CoffeeShop\DarkRoast;
use PHPUnit\Framework\TestCase;

/**
 * DarkRoast unit test class.
 */
class DarkRoastTest extends TestCase
{
    public function testDescription()
    {
        $expected = 'Dark Roast';
        $darkRoast = new DarkRoast();

        $this->assertAttributeEquals($expected, 'description', $darkRoast);
    }

    public function testCost()
    {
        $expected = 0.99;
        $darkRoast = new DarkRoast();

        $this->assertEquals($expected, $darkRoast->cost());
    }
}
