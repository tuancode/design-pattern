<?php

namespace WeatherStation;

/**
 * Class WeatherData.
 */
class WeatherData implements SubjectInterface
{
    /**
     * @var ObserverInterface[]
     */
    private $observers = [];

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * {@inheritdoc}
     */
    public function attach(ObserverInterface $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index === false) {
            $this->observers[] = $observer;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function detach(ObserverInterface $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            //            $observer->update();
        }
    }
}
