<?php

namespace WeatherMonitor\Tests\Functional;

use PHPUnit\Framework\TestCase;
use WeatherMonitor\Display\CurrentConditionDisplay;
use WeatherMonitor\Display\ForecastDisplay;
use WeatherMonitor\Display\StatisticsDisplay;
use WeatherMonitor\WeatherData;

/**
 * ObserverPattern functional test class.
 */
class ObserverTest extends TestCase
{
    /**
     * Test displays register observer of WeatherData
     * and receive notification whenever WeatherData measurement is changed.
     *
     * @noinspection PhpUnusedLocalVariableInspection
     *
     * @dataProvider observerAttachDataProvider
     *
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @param array $expected
     */
    public function testObserverAttachAndGetNotificationWhenSubjectChanged(
        float $temperature,
        float $humidity,
        float $pressure,
        array $expected
    ) {
        $weatherData = new WeatherData();

        // Observer registration happen in constructor
        /** @noinspection PhpUnusedLocalVariableInspection */
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);
        /** @noinspection PhpUnusedLocalVariableInspection */
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        /** @noinspection PhpUnusedLocalVariableInspection */
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements($temperature, $humidity, $pressure);
        $expected = implode('', $expected);

        $this->expectOutputString($expected);
    }

    /**
     * @return array
     */
    public function observerAttachDataProvider()
    {
        return [
            [
                80,
                65,
                30.4,
                [
                    "Current conditions: 80.0F degrees and 65.0% humidity\n",
                    "Avg/Max/Min temperature = 80.0/80.0/80.0\n",
                    "Forecast: Improving weather on the way!\n",
                ],
            ],
            [
                82,
                70,
                29.2,
                [
                    "Current conditions: 82.0F degrees and 70.0% humidity\n",
                    "Avg/Max/Min temperature = 82.0/82.0/82.0\n",
                    "Forecast: Watch out for cooler, rainy weather\n",
                ],
            ],
            [
                78,
                90,
                29.2,
                [
                    "Current conditions: 78.0F degrees and 90.0% humidity\n",
                    "Avg/Max/Min temperature = 78.0/78.0/78.0\n",
                    "Forecast: Watch out for cooler, rainy weather\n",
                ],
            ],
        ];
    }

    /**
     * Test a display remove observer of WeatherData
     * and stop to receive any notification from WeatherData.
     */
    public function testObserverDetachAndStopToReceiveNotificationFromSubject()
    {
        // Expected no forecast display
        $expected = [
            "Current conditions: 80.0F degrees and 65.0% humidity\n",
            "Avg/Max/Min temperature = 80.0/80.0/80.0\n",
        ];

        $weatherData = new WeatherData();

        // Observer registration happen in constructor
        /** @noinspection PhpUnusedLocalVariableInspection */
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);
        /** @noinspection PhpUnusedLocalVariableInspection */
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        /** @noinspection PhpUnusedLocalVariableInspection */
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->detach($forecastDisplay); // Remove forecastDisplay observer
        $weatherData->setMeasurements(80, 65, 30.4);

        $this->expectOutputString(implode('', $expected));
    }
}
