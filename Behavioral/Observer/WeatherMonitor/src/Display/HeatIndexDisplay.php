<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;
use WeatherMonitor\WeatherData;

/**
 * Heat Index Display.
 */
class HeatIndexDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $heatIndex = 0.0;

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
    public function update(SubjectInterface $subject)
    {
        if ($subject instanceof WeatherData) {
            $this->heatIndex = $this->computeHeatIndex($subject->getTemperature(), $subject->getHumidity());
            $this->display();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return sprintf('Heat index is %f', $this->heatIndex);
    }

    /**
     * Compute weather heat index.
     *
     * @param float $temperature
     * @param float $humidity
     *
     * @return float
     */
    private function computeHeatIndex(float $temperature, float $humidity)
    {
        return (float)
        (
            (16.923 + (0.185212 * $temperature)) +
            (5.37941 * $humidity) -
            (0.100254 * $temperature * $humidity) +
            (0.00941695 * ($temperature * $temperature)) +
            (0.00728898 * ($humidity * $humidity)) +
            (0.000345372 * ($temperature * $temperature * $humidity)) -
            (0.000814971 * ($temperature * $humidity * $humidity)) +
            (0.0000102102 * ($temperature * $temperature * $humidity * $humidity)) -
            (0.000038646 * ($temperature * $temperature * $temperature)) +
            (0.0000291583 * ($humidity * $humidity * $humidity)) +
            (0.00000142721 * ($temperature * $temperature * $temperature * $humidity)) +
            (0.000000197483 * ($temperature * $humidity * $humidity * $humidity)) -
            (0.0000000218429 * ($temperature * $temperature * $temperature * $humidity * $humidity)) +
            (0.000000000843296 * ($temperature * $temperature * $humidity * $humidity * $humidity)) -
            (0.0000000000481975 * ($temperature * $temperature * $temperature * $humidity * $humidity * $humidity))
        );
    }
}
