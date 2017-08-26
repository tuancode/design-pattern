<?php

namespace WeatherMonitor\Tests\Unit\Display;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\WeatherData;
use WeatherMonitor\Display\HeatIndexDisplay;

/**
 * HeatIndexDisplay unit test class.
 */
class HeatIndexDisplayTest extends TestCase
{
    public function testUpdateSetupProperty()
    {
        $temperature = 80;
        $humidity = 65;
        $expected = 82.95535;

        $dataMock = $this->getMockBuilder(WeatherData::class)->setMethods(['getTemperature', 'getHumidity'])->getMock();
        $dataMock->method('getTemperature')->willReturn($temperature);
        $dataMock->method('getHumidity')->willReturn($humidity);

        /** @var WeatherData $weatherData */
        $weatherData = $dataMock;
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);
        $heatIndexDisplay->update($weatherData);

        $this->assertAttributeEquals($expected, 'heatIndex', $heatIndexDisplay, '', 0.000001);
    }

    public function testUpdateTriggerDisplayMethod()
    {
        $weatherData = $this->createMock(WeatherData::class);

        $displayMock = $this->getMockBuilder(HeatIndexDisplay::class)
            ->disableOriginalConstructor()
            ->setMethods(['display'])
            ->getMock();
        $displayMock->expects($this->once())->method('display');

        /** @var HeatIndexDisplay $heatIndexDisplay */
        $heatIndexDisplay = $displayMock;
        $heatIndexDisplay->update($weatherData);
    }

    public function testDisplay()
    {
        $heatIndex = 82.95535;
        $expected = sprintf('Heat index is %1$.5f', $heatIndex);

        $weatherData = $this->createMock(WeatherData::class);
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);

        $temperatureProperty = new \ReflectionProperty($heatIndexDisplay, 'heatIndex');
        $temperatureProperty->setAccessible(true);
        $temperatureProperty->setValue($heatIndexDisplay, $heatIndex);

        $this->assertEquals($expected, $heatIndexDisplay->display());
    }
}
