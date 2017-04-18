<?php

namespace DesignPattern\Behavioral\Strategy\tests;

use DesignPattern\Behavioral\Strategy\src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test RubberDuck can swim, squeak, but cannot quack and fly.
 */
class RubberDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Rubber Duck.';

    /**
     * @inheritDoc
     */
    public function testDisplay()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $rubberDuck->display());
    }

    /**
     * @inheritDoc
     */
    public function testSwim()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $rubberDuck->swim());
    }

    /**
     * @inheritDoc
     */
    public function testFly()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_FLY_NO_WAY, $rubberDuck->performFly());
    }

    /**
     * @inheritDoc
     */
    public function testQuack()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_QUACK_SQUEAK, $rubberDuck->performQuack());
    }
}