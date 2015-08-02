<?php

namespace TE923ToMysql\Lib\Te923Tool;

class TE923ToolData
{
    protected $timestamp;
    protected $tempInternal;
    protected $humInternal;
    protected $tempChannel1;
    protected $tempChannel2;
    protected $tempChannel3;
    protected $tempChannel4;
    protected $tempChannel5;
    protected $humChannel1;
    protected $humChannel2;
    protected $humChannel3;
    protected $humChannel4;
    protected $humChannel5;
    protected $airpressure;
    protected $uv;
    protected $forecast;
    protected $stormwarning;
    protected $windDirection;
    protected $windSpeed;
    protected $windGust;
    protected $windChill;
    protected $rain;

    public function __construct(
        $timestamp,
        $tempInternal,
        $humInternal,
        $tempChannel1,
        $tempChannel2,
        $tempChannel3,
        $tempChannel4,
        $tempChannel5,
        $humChannel1,
        $humChannel2,
        $humChannel3,
        $humChannel4,
        $humChannel5,
        $airpressure,
        $uv,
        $forecast,
        $stormwarning,
        $windDirection,
        $windSpeed,
        $windGust,
        $windChill,
        $rain
    ) {
        $this->timestamp = $timestamp;          // Time of measurement
        $this->tempInternal = $tempInternal;    // temperature from internal sensor in °C
        $this->humInternal = $humInternal;      // humidity from internal sensor in % rel
        $this->tempChannel1 = $tempChannel1;    // temperature from external channel 1 in °C
        $this->tempChannel2 = $tempChannel2;    // temperature from external channel 2 in °C
        $this->tempChannel3 = $tempChannel3;    // temperature from external channel 3 in °C
        $this->tempChannel4 = $tempChannel4;    // temperature from external channel 4 in °C
        $this->tempChannel5 = $tempChannel5;    // temperature from external channel 5 in °C
        $this->humChannel1 = $humChannel1;      // humidity from external channel 1 in % rel
        $this->humChannel2 = $humChannel2;      // humidity from external channel 2 in % rel
        $this->humChannel3 = $humChannel3;      // humidity from external channel 3 in % rel
        $this->humChannel4 = $humChannel4;      // humidity from external channel 4 in % rel
        $this->humChannel5 = $humChannel5;      // humidity from external channel 5 in % rel
        $this->airpressure = $airpressure;      // in mbar
        $this->uv = $uv;                        // UV index
        $this->stormwarning = $stormwarning;    // stormwarning; 0 - no warning, 1 - fix your dog
        $this->windDirection = $windDirection;  // wind direction in n x 22.5°; 0 -> north
        $this->windSpeed = $windSpeed;          // wind speed in m/s
        $this->windGust = $windGust;            // wind gust speed in m/s
        $this->windChill = $windChill;          // windchill temperature in °C
        $this->rain = $rain;                    // rain counter (maybe since station starts measurement) as value

        //Convert forecast integer to label
        $this->forecast = $this->decideForecast($forecast);
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getTempInternal()
    {
        return $this->tempInternal;
    }

    /**
     * @return mixed
     */
    public function getHumInternal()
    {
        return $this->humInternal;
    }

    /**
     * @return mixed
     */
    public function getTempChannel1()
    {
        return $this->tempChannel1;
    }

    /**
     * @return mixed
     */
    public function getTempChannel2()
    {
        return $this->tempChannel2;
    }

    /**
     * @return mixed
     */
    public function getTempChannel3()
    {
        return $this->tempChannel3;
    }

    /**
     * @return mixed
     */
    public function getTempChannel4()
    {
        return $this->tempChannel4;
    }

    /**
     * @return mixed
     */
    public function getTempChannel5()
    {
        return $this->tempChannel5;
    }

    /**
     * @return mixed
     */
    public function getHumChannel1()
    {
        return $this->humChannel1;
    }

    /**
     * @return mixed
     */
    public function getHumChannel2()
    {
        return $this->humChannel2;
    }

    /**
     * @return mixed
     */
    public function getHumChannel3()
    {
        return $this->humChannel3;
    }

    /**
     * @return mixed
     */
    public function getHumChannel4()
    {
        return $this->humChannel4;
    }

    /**
     * @return mixed
     */
    public function getHumChannel5()
    {
        return $this->humChannel5;
    }

    /**
     * @return mixed
     */
    public function getAirpressure()
    {
        return $this->airpressure;
    }

    /**
     * @return mixed
     */
    public function getUv()
    {
        return $this->uv;
    }

    /**
     * @return mixed
     */
    public function getForecast()
    {
        return $this->forecast;
    }

    /**
     * @return mixed
     */
    public function getStormwarning()
    {
        return $this->stormwarning;
    }

    /**
     * @return mixed
     */
    public function getWindDirection()
    {
        return $this->windDirection;
    }

    /**
     * @return mixed
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * @return mixed
     */
    public function getWindGust()
    {
        return $this->windGust;
    }

    /**
     * @return mixed
     */
    public function getWindChill()
    {
        return $this->windChill;
    }

    /**
     * @return mixed
     */
    public function getRain()
    {
        return $this->rain;
    }

    private function decideForecast($data)
    {
        //Convert the Forecast to something readable
        $forecast = "unknown";
        switch ($data) {
            case 0:
                $forecast = "heavy_snow";
                break;
            case 1:
                $forecast = "little_snow";
                break;
            case 2:
                $forecast = "heavy_rain";
                break;
            case 3:
                $forecast = "little_rain";
                break;
            case 4:
                $forecast = "cloudy";
                break;
            case 5:
                $forecast = "some_clouds";
                break;
            case 6:
                $forecast = "sunny";
                break;
        }

        return $forecast;
    }
}
