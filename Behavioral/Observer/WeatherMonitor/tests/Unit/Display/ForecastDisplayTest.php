<?php

namespace WeatherMonitor\Tests\Unit\Display;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\ForecastDisplay;
use WeatherMonitor\WeatherData;

/**
 * ForecastDisplay unit test class.
 */
class ForecastDisplayTest extends TestCase
{
    public function testUpdateSetupProperty()
    {
        $pressure = 30.4;

        $dataMock = $this->getMockBuilder(WeatherData::class)->setMethods(['getPressure'])->getMock();
        $dataMock->method('getPressure')->willReturn($pressure);

        /** @var WeatherData $weatherData */
        $weatherData = $dataMock;
        $forecastDisplay = new ForecastDisplay($weatherData);

        $currentPressure = new \ReflectionProperty($forecastDisplay, 'currentPressure');
        $currentPressure->setAccessible(true);
        $currentPressure = $currentPressure->getValue($forecastDisplay);

        $forecastDisplay->update($weatherData);
        $this->assertAttributeEquals($pressure, 'currentPressure', $forecastDisplay);
        $this->assertAttributeEquals($currentPressure, 'lastPressure', $forecastDisplay);
    }

    public function testUpdateTriggerDisplayMethod()
    {
        $weatherData = $this->createMock(WeatherData::class);

        $displayMock = $this->getMockBuilder(ForecastDisplay::class)
            ->disableOriginalConstructor()
            ->setMethods(['display'])
            ->getMock();
        $displayMock->expects($this->once())->method('display');

        /** @var ForecastDisplay $forecastDisplay */
        $forecastDisplay = $displayMock;
        $forecastDisplay->update($weatherData);
    }

    /**
     * @dataProvider displayDataProvider
     *
     * @param float  $currentPressure
     * @param float  $lastPressure
     * @param string $expected
     */
    public function testDisplay(float $currentPressure, float $lastPressure, string $expected)
    {
        $weatherData = $this->createMock(WeatherData::class);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $temperatureDisplay = new \ReflectionProperty($forecastDisplay, 'currentPressure');
        $temperatureDisplay->setAccessible(true);
        $temperatureDisplay->setValue($forecastDisplay, $currentPressure);

        $humidityDisplay = new \ReflectionProperty($forecastDisplay, 'lastPressure');
        $humidityDisplay->setAccessible(true);
        $humidityDisplay->setValue($forecastDisplay, $lastPressure);

        $this->assertEquals($expected, $forecastDisplay->display());
    }

    /**
     * Data Provider for testDisplay.
     *
     * @return array
     */
    public function displayDataProvider()
    {
        return [
            [1, 0, 'Forecast: Improving weather on the way!'],
            [1, 1, 'Forecast: More of the same'],
            [0, 1, 'Forecast: Watch out for cooler, rainy weather'],
        ];
    }
}
