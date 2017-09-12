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
        $espresso = new Espresso();

        $this->assertAttributeEquals(Espresso::DESCRIPTION, 'description', $espresso);
    }

    public function testCost()
    {
        $espresso = new Espresso();

        $this->assertEquals(Espresso::COST, $espresso->cost());
    }
}
