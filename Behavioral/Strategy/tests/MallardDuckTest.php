<?php

namespace DesignPattern\Behavioral\Strategy\tests;

use DesignPattern\Behavioral\Strategy\src\MallardDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test MallardDuck can swim, quack, fly.
 */
class MallardDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Mallard Duck.';

    /**
     * @inheritDoc
     */
    public function testDisplay()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $mallardDuck->display());
    }

    /**
     * @inheritDoc
     */
    public function testSwim()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $mallardDuck->swim());
    }

    /**
     * @inheritDoc
     */
    public function testFly()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_FLY, $mallardDuck->performFly());
    }

    /**
     * @inheritDoc
     */
    public function testQuack()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_QUACK, $mallardDuck->performQuack());
    }
}
