<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test RubberDuck can swim, squeak, but cannot Quack and fly.
 */
class RubberDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Rubber Duck.';

    /**
     * {@inheritdoc}
     */
    public function testDisplay()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $rubberDuck->display());
    }

    /**
     * {@inheritdoc}
     */
    public function testSwim()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $rubberDuck->swim());
    }

    /**
     * {@inheritdoc}
     */
    public function testFly()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_FLY_NO_WAY, $rubberDuck->performFly());
    }

    /**
     * {@inheritdoc}
     */
    public function testQuack()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals(self::EXPECTED_QUACK_SQUEAK, $rubberDuck->performQuack());
    }
}
