<?php

namespace WeatherMonitor\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\ForecastDisplay;
use WeatherMonitor\ObserverInterface;
use WeatherMonitor\WeatherData;

/**
 * WeatherData unit test class.
 */
class WeatherDataTest extends TestCase
{
    public function testAttach()
    {
        $forecastDisplay = $this->createMock(ForecastDisplay::class);

        $weatherData = new WeatherData();
        $weatherData->attach($forecastDisplay);

        $this->assertAttributeContains($forecastDisplay, 'observers', $weatherData);
    }

    public function testDetach()
    {
        $forecastDisplay = $this->createMock(ForecastDisplay::class);
        $weatherData = new WeatherData();

        $weatherData->attach($forecastDisplay);
        $this->assertAttributeContains($forecastDisplay, 'observers', $weatherData);

        $weatherData->detach($forecastDisplay);
        $this->assertAttributeNotContains($forecastDisplay, 'observers', $weatherData);
    }

    public function testNotify()
    {
        $mock = $this->getMockBuilder(ForecastDisplay::class)
            ->disableOriginalConstructor()
            ->setMethods(['update'])
            ->getMock();
        $mock->expects($this->once())->method('update');

        /** @var ObserverInterface $forecastDisplay */
        $forecastDisplay = $mock;
        $weatherData = new WeatherData();
        $weatherData->attach($forecastDisplay);
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

        $mock = $this->getMockBuilder(WeatherData::class)->setMethods(['measurementsChanged'])->getMock();
        $mock->expects($this->once())->method('measurementsChanged');

        /** @var WeatherData $weatherData */
        $weatherData = $mock;
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
        $humidity = 65;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements(0.0, $humidity, 0.0);

        $this->assertEquals($humidity, $weatherData->getHumidity());
    }

    public function testGetPressure()
    {
        $pressure = 30.4;

        $weatherData = new WeatherData();
        $weatherData->setMeasurements(0.0, 0.0, $pressure);

        $this->assertEquals($pressure, $weatherData->getPressure());
    }
}
