<?php

namespace WeatherStation\Display;

use WeatherStation\ObserverInterface;
use WeatherStation\SubjectInterface;

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
