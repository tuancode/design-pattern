<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;
use WeatherMonitor\WeatherData;

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
     * CurrentConditionDisplay constructor.
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
            $this->temperature = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
            $this->display();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return sprintf('Current conditions: %s F degrees and %s humidity', $this->temperature, $this->humidity);
    }
}
