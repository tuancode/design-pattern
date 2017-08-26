<?php

namespace WeatherMonitor\Tests\Unit\Display;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\CurrentConditionDisplay;
use WeatherMonitor\WeatherData;

/**
 * CurrentConditionDisplay unit test class.
 */
class CurrentConditionDisplayTest extends TestCase
{
    public function testUpdateSetupProperty()
    {
        $temperature = 80;
        $humidity = 65;

        $dataMock = $this->getMockBuilder(WeatherData::class)->setMethods(['getTemperature', 'getHumidity'])->getMock();
        $dataMock->method('getTemperature')->willReturn($temperature);
        $dataMock->method('getHumidity')->willReturn($humidity);

        /** @var WeatherData $weatherData */
        $weatherData = $dataMock;
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);
        $currentConditionDisplay->update($weatherData);

        $this->assertAttributeEquals($temperature, 'temperature', $currentConditionDisplay);
        $this->assertAttributeEquals($humidity, 'humidity', $currentConditionDisplay);
    }

    public function testUpdateTriggerDisplayMethod()
    {
        $weatherData = $this->createMock(WeatherData::class);

        $displayMock = $this->getMockBuilder(CurrentConditionDisplay::class)
            ->disableOriginalConstructor()
            ->setMethods(['display'])
            ->getMock();
        $displayMock->expects($this->once())->method('display');

        /** @var CurrentConditionDisplay $currentConditionDisplay */
        $currentConditionDisplay = $displayMock;
        $currentConditionDisplay->update($weatherData);
    }

    public function testDisplay()
    {
        $temperature = 80;
        $humidity = 65;
        $expected = sprintf('Current conditions: %s F degrees and %s humidity', $temperature, $humidity);

        $weatherData = $this->createMock(WeatherData::class);
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);

        $temperatureDisplay = new \ReflectionProperty($currentConditionDisplay, 'temperature');
        $temperatureDisplay->setAccessible(true);
        $temperatureDisplay->setValue($currentConditionDisplay, $temperature);

        $humidityDisplay = new \ReflectionProperty($currentConditionDisplay, 'humidity');
        $humidityDisplay->setAccessible(true);
        $humidityDisplay->setValue($currentConditionDisplay, $humidity);

        $this->assertEquals($expected, $currentConditionDisplay->display());
    }
}
