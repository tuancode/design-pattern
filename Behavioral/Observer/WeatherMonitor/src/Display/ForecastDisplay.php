<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;
use WeatherMonitor\WeatherData;

/**
 * Forecast Display.
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
     * Register class object to an observer of subject.
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
    public function update(SubjectInterface $subject)
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
    public function display()
    {
        $message = 'Forecast: ';

        if ($this->currentPressure > $this->lastPressure) {
            $message .= 'Improving weather on the way!';
        } elseif ($this->currentPressure == $this->lastPressure) {
            $message .= 'More of the same';
        } elseif ($this->currentPressure < $this->lastPressure) {
            $message .= 'Watch out for cooler, rainy weather';
        }

        echo "{$message}\n";
    }
}
