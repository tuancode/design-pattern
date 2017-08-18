<?php

namespace WeatherMonitor\Display;

use WeatherMonitor\ObserverInterface;
use WeatherMonitor\SubjectInterface;

/**
 * Class StatisticsDisplay.
 */
class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $maxTemp;

    /**
     * @var float
     */
    private $minTemp;

    /**
     * @var float
     */
    private $tempSum;

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
    public function update(SubjectInterface $subject): void
    {
        // TODO: Implement update() method.
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return sprintf('Avg/Max/Min temperature = %');
    }
}
