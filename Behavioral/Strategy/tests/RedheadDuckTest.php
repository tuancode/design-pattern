<?php

namespace DesignPattern\Behavioral\Strategy\tests;

use DesignPattern\Behavioral\Strategy\src\RedheadDuck;
use PHPUnit\Framework\TestCase;

/**
 * Test RedheadDuck can swim, quack, fly.
 */
class RedheadDuckTest extends TestCase implements DuckTestInterface
{
    const EXPECTED_DISPLAY = 'I am Redhead Duck.';

    /**
     * @inheritDoc
     */
    public function testDisplay()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_DISPLAY, $redheadDuck->display());
    }

    /**
     * @inheritDoc
     */
    public function testSwim()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_SWIM, $redheadDuck->swim());
    }

    /**
     * @inheritDoc
     */
    public function testFly()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_FLY, $redheadDuck->performFly());
    }

    /**
     * @inheritDoc
     */
    public function testQuack()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals(self::EXPECTED_QUACK, $redheadDuck->performQuack());
    }
}