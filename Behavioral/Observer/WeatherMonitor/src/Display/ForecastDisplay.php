<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;
use WeatherMonitor\WeatherData;

/**
 * Class ForecastDisplay.
 */
class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $currentPressure = 29.92;

    /**
     * @var float
     */
    private $lastPressure;

    /**
     * Register forecast display to an observer of subject.
     *
     * @param SubjectInterface $subject
     */
    public function __construct(SubjectInterface $subject)
    {
        $subject->attach($this);
    }

    /**
     * {@inheritdoc}
     */
    public function update(SubjectInterface $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->lastPressure = $this->currentPressure;
            $this->currentPressure = $subject->getPressure();
            $this->display();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        $message = 'Forecast: ';

        if ($this->currentPressure > $this->lastPressure) {
            $message .= 'Improving weather on the way!';
        } elseif ($this->currentPressure == $this->lastPressure) {
            $message .= 'More of the same';
        } elseif ($this->currentPressure < $this->lastPressure) {
            $message .= 'Watch out for cooler, rainy weather';
        }

        return $message;
    }
}
