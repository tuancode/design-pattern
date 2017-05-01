<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test MallardDuck can swim, Quack, fly.
 */
class MallardDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Mallard Duck.';

    /**
     * {@inheritdoc}
     */
    public function testDisplay()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $mallardDuck->display());
    }

    /**
     * {@inheritdoc}
     */
    public function testSwim()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $mallardDuck->swim());
    }

    /**
     * {@inheritdoc}
     */
    public function testFly()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_FLY, $mallardDuck->performFly());
    }

    /**
     * {@inheritdoc}
     */
    public function testQuack()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals(self::EXPECTED_QUACK, $mallardDuck->performQuack());
    }
}
