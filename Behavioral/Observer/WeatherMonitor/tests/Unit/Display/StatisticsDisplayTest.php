<?php

namespace WeatherMonitor\Tests\Unit\Display;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\CurrentConditionDisplay;
use WeatherMonitor\Display\StatisticsDisplay;
use WeatherMonitor\WeatherData;

class StatisticsDisplayTest extends TestCase
{
    public function testUpdateSetupProperty()
    {
        $temperature = 80;

        $dataMock = $this->getMockBuilder(WeatherData::class)->setMethods(['getTemperature'])->getMock();
        $dataMock->method('getTemperature')->willReturn($temperature);

        /** @var WeatherData $weatherData */
        $weatherData = $dataMock;
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $statisticsDisplay->update($weatherData);

        $this->assertAttributeEquals(1, 'numReadings', $statisticsDisplay);
        $this->assertAttributeEquals($temperature, 'maxTemp', $statisticsDisplay);
        $this->assertAttributeEquals($temperature, 'minTemp', $statisticsDisplay);
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
        $max = 105;
        $min = 55;
        $sum = 15;
        $numReadings = 1;
        $avg = $sum / $numReadings;
        $expected = sprintf('Avg/Max/Min temperature = %1$.1f/%1$.1f/%1$.1f', $avg, $max, $min);

        $weatherData = $this->createMock(WeatherData::class);
        $currentConditionDisplay = new StatisticsDisplay($weatherData);

        $maxTempProperty = new \ReflectionProperty($currentConditionDisplay, 'maxTemp');
        $maxTempProperty->setAccessible(true);
        $maxTempProperty->setValue($currentConditionDisplay, $max);

        $minTempProperty = new \ReflectionProperty($currentConditionDisplay, 'minTemp');
        $minTempProperty->setAccessible(true);
        $minTempProperty->setValue($currentConditionDisplay, $min);

        $tempSumProperty = new \ReflectionProperty($currentConditionDisplay, 'tempSum');
        $tempSumProperty->setAccessible(true);
        $tempSumProperty->setValue($currentConditionDisplay, $sum);

        $numReadingsProperty = new \ReflectionProperty($currentConditionDisplay, 'numReadings');
        $numReadingsProperty->setAccessible(true);
        $numReadingsProperty->setValue($currentConditionDisplay, $numReadings);

        $this->assertEquals($expected, $currentConditionDisplay->display());
    }
}
