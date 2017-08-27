<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;
use WeatherMonitor\WeatherData;

/**
 * Statistics Display.
 */
class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $maxTemp = 0.0;

    /**
     * @var float
     */
    private $minTemp = 200;

    /**
     * @var float
     */
    private $tempSum = 0.0;

    /**
     * @var int
     */
    private $numReadings;

    /**
     * StatisticsDisplay constructor.
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
            $this->tempSum += $subject->getTemperature();
            ++$this->numReadings;

            if ($subject->getTemperature() > $this->maxTemp) {
                $this->maxTemp = $subject->getTemperature();
            }

            if ($subject->getTemperature() < $this->minTemp) {
                $this->minTemp = $subject->getTemperature();
            }

            $this->display();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function display()
    {
        echo sprintf(
            "Avg/Max/Min temperature = %1\$.1f/%2\$.1f/%3\$.1f\n",
            ($this->tempSum / $this->numReadings),
            $this->maxTemp,
            $this->minTemp
        );
    }
}
