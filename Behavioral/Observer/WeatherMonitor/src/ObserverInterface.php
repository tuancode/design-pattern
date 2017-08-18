<?php

namespace WeatherMonitor;

/**
 * Interface ObserverInterface.
 */
interface ObserverInterface
{
    /**
     * Receive update from subject.
     *
     * @param SubjectInterface $subject
     */
    public function update(SubjectInterface $subject): void;
}
