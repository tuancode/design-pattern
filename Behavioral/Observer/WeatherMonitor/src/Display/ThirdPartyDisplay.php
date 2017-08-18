<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;

/**
 * Class ThirdPartyDisplay.
 */
class ThirdPartyDisplay implements DisplayElementInterface, ObserverInterface
{
    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return sprintf('');
    }

    /**
     * {@inheritdoc}
     */
    public function update(SubjectInterface $subject): void
    {
        // TODO: Implement update() method.
    }
}
