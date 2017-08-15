<?php

namespace WeatherStation\Display;

use WeatherStation\ObserverInterface;
use WeatherStation\SubjectInterface;

/**
 * Class CurrentConditionDisplay.
 */
class CurrentConditionDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * {@inheritdoc}
     */
    public function update(SubjectInterface $subject): void
    {
        // TODO: Implement update() method.
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return sprintf('Current conditions: %s F degrees and %s humidity', $this->temperature, $this->humidity);
    }
}
