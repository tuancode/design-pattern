<?php

namespace CoffeeShop\Tests\Unit;

use CoffeeShop\Espresso;
use PHPUnit\Framework\TestCase;

/**
 * Espresso unit test class.
 */
class EspressoTest extends TestCase
{
    public function testDescription()
    {
        $expected = 'Espresso';
        $espresso = new Espresso();

        $this->assertAttributeEquals($expected, 'description', $espresso);
    }

    public function testCost()
    {
        $expected = 1.99;
        $espresso = new Espresso();

        $this->assertEquals($expected, $espresso->cost());
    }
}
