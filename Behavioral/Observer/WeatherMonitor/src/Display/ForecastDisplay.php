<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;

/**
 * Class ForecastDisplay.
 */
class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
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
        return sprintf('');
    }
}
