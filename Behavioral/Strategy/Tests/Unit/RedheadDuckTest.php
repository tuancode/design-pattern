<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\RedheadDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test RedheadDuck can swim, Quack, fly.
 */
class RedheadDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Redhead Duck.';

    /**
     * {@inheritdoc}
     */
    public function testDisplay()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $redheadDuck->display());
    }

    /**
     * {@inheritdoc}
     */
    public function testSwim()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $redheadDuck->swim());
    }

    /**
     * {@inheritdoc}
     */
    public function testFly()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_FLY, $redheadDuck->performFly());
    }

    /**
     * {@inheritdoc}
     */
    public function testQuack()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_QUACK, $redheadDuck->performQuack());
    }
}
