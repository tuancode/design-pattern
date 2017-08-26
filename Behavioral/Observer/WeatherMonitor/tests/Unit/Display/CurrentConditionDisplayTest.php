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
        $expected = sprintf('Current conditions: %1$.1f F degrees and %1$.1f humidity', $temperature, $humidity);

        $weatherData = $this->createMock(WeatherData::class);
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);

        $temperatureProperty = new \ReflectionProperty($currentConditionDisplay, 'temperature');
        $temperatureProperty->setAccessible(true);
        $temperatureProperty->setValue($currentConditionDisplay, $temperature);

        $humidityProperty = new \ReflectionProperty($currentConditionDisplay, 'humidity');
        $humidityProperty->setAccessible(true);
        $humidityProperty->setValue($currentConditionDisplay, $humidity);

        $this->assertEquals($expected, $currentConditionDisplay->display());
    }
}
