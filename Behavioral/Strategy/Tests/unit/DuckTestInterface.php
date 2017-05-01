<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

interface DuckTestInterface
{
    const EXPECTED_SWIM = 'I am swimming.';
    const EXPECTED_FLY = 'I am flying.';
    const EXPECTED_FLY_ROCKET = 'Woo-hoo! I am flying with a rocket.';
    const EXPECTED_FLY_NO_WAY = 'I cannot fly!';
    const EXPECTED_QUACK = 'Quack...quack...quack!';
    const EXPECTED_QUACK_MUTE = 'I cannot quack!';
    const EXPECTED_QUACK_SQUEAK = 'Squeak...squeak...squeak!';

    /**
     * Test display behavior.
     */
    public function testDisplay();

    /**
     * Test swim behavior.
     */
    public function testSwim();

    /**
     * Test fly behavior.
     */
    public function testFly();

    /**
     * Test quack behavior.
     */
    public function testQuack();
}
