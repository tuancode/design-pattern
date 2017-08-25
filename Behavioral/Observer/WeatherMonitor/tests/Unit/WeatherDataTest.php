<?php

namespace WeatherMonitor\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\HeatIndexDisplay;
use WeatherMonitor\ObserverInterface;
use WeatherMonitor\WeatherData;

class WeatherDataTest extends TestCase
{
    public function testAttach()
    {
        $weatherData = new WeatherData();
        $heatIndexDisplay = $this->createMock(HeatIndexDisplay::class);
        $weatherData->attach($heatIndexDisplay);

        $reflectionProperty = new \ReflectionProperty($weatherData, 'observers');
        $reflectionProperty->setAccessible(true);
        $observer = current($reflectionProperty->getValue($weatherData));

        $this->assertInstanceOf(HeatIndexDisplay::class, $observer);
    }

    public function testDetach()
    {
        $weatherData = new WeatherData();
        $heatIndexDisplay = $this->createMock(HeatIndexDisplay::class);
        $weatherData->detach($heatIndexDisplay);

        $reflectionProperty = new \ReflectionProperty($weatherData, 'observers');
        $reflectionProperty->setAccessible(true);
        $observer = current($reflectionProperty->getValue($weatherData));

        $this->assertNotInstanceOf(HeatIndexDisplay::class, $observer);
    }

    public function testNotify()
    {
        $mock = $this->getMockBuilder(HeatIndexDisplay::class)
            ->disableOriginalConstructor()
            ->setMethods(['update'])
            ->getMock();
        $mock->expects($this->once())->method('update');

        /** @var ObserverInterface $heatIndexDisplay */
        $heatIndexDisplay = $mock;
        $weatherData = new WeatherData();
        $weatherData->attach($heatIndexDisplay);
        $weatherData->notify();
    }

    public function testMeasurementsChanged()
    {
        $mock = $this->getMockBuilder(WeatherData::class)->setMethods(['notify'])->getMock();
        $mock->expects($this->once())->method('notify');

        /** @var WeatherData $weatherData */
        $weatherData = $mock;
        $weatherData->measurementsChanged();
    }

    public function testSetMeasurements()
    {
        $temperature = 80;
        $humidity = 65;
        $pressure = 30.4;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements($temperature, $humidity, $pressure);

        $this->assertEquals($temperature, $weatherData->getTemperature());
        $this->assertEquals($humidity, $weatherData->getHumidity());
        $this->assertEquals($pressure, $weatherData->getPressure());
    }

    public function testGetTemperature()
    {
        $temperature = 80;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements($temperature, 0.0, 0.0);

        $this->assertEquals($temperature, $weatherData->getTemperature());
    }

    public function testGetHumidity()
    {
        $pressure = 30.4;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements(0.0, 0.0, $pressure);

        $this->assertEquals($pressure, $weatherData->getPressure());
    }

    public function testGetPressure()
    {
        $humidity = 65;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements(0.0, $humidity, 0.0);

        $this->assertEquals($humidity, $weatherData->getHumidity());
    }
}
