<?php

namespace WeatherMonitor;

/**
 * Interface SubjectInterface.
 */
interface SubjectInterface
{
    /**
     * Attach an observer to list.
     *
     * @param ObserverInterface $observer
     */
    public function attach(ObserverInterface $observer): void;

    /**
     * Detach an observer from list.
     *
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer): void;

    /**
     * Notify observers.
     */
    public function notify(): void;
}
