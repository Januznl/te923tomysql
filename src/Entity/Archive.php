<?php

namespace TE923ToMysql\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive
 *
 * @ORM\Table(name="archive")
 * @ORM\Entity
 */
class Archive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dateTime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $datetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="usUnits", type="integer", nullable=false)
     */
    private $usunits;

    /**
     * @var integer
     *
     * @ORM\Column(name="arcInt", type="integer", nullable=false)
     */
    private $arcint;

    /**
     * @var float
     *
     * @ORM\Column(name="barometer", type="float", precision=10, scale=0, nullable=true)
     */
    private $barometer;

    /**
     * @var float
     *
     * @ORM\Column(name="inTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $intemp;

    /**
     * @var float
     *
     * @ORM\Column(name="inHumidity", type="float", precision=10, scale=0, nullable=true)
     */
    private $inhumidity;

    /**
     * @var float
     *
     * @ORM\Column(name="windSpeed", type="float", precision=10, scale=0, nullable=true)
     */
    private $windspeed;

    /**
     * @var float
     *
     * @ORM\Column(name="windDir", type="float", precision=10, scale=0, nullable=true)
     */
    private $winddir;

    /**
     * @var float
     *
     * @ORM\Column(name="windGust", type="float", precision=10, scale=0, nullable=true)
     */
    private $windgust;

    /**
     * @var float
     *
     * @ORM\Column(name="rain", type="float", precision=10, scale=0, nullable=true)
     */
    private $rain;

    /**
     * @var float
     *
     * @ORM\Column(name="windchill", type="float", precision=10, scale=0, nullable=true)
     */
    private $windchill;

    /**
     * @var float
     *
     * @ORM\Column(name="UV", type="float", precision=10, scale=0, nullable=true)
     */
    private $uv;

    /**
     * @var string
     *
     * @ORM\Column(name="forecast", type="string", length=255, nullable=true)
     */
    private $forecast;

    /**
     * @var integer
     *
     * @ORM\Column(name="stormwarning", type="integer", nullable=true)
     */
    private $stormwarning;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor1Temp", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor1temp;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor1Humid", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor1humid;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor2Temp", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor2temp;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor2Humid", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor2humid;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor3Temp", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor3temp;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor3Humid", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor3humid;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor4Temp", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor4temp;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor4Humid", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor4humid;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor5Temp", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor5temp;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor5Humid", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor5humid;

    /**
     * @var float
     *
     * @ORM\Column(name="windBatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $windbatterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="rainBatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $rainbatterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor1BatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor1batterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor2BatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor2batterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor3BatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor3batterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor4BatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor4batterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="sensor5BatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $sensor5batterystatus;



    /**
     * Get datetime
     *
     * @return integer 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set usunits
     *
     * @param integer $usunits
     * @return Archive
     */
    public function setUsunits($usunits)
    {
        $this->usunits = $usunits;

        return $this;
    }

    /**
     * Get usunits
     *
     * @return integer 
     */
    public function getUsunits()
    {
        return $this->usunits;
    }

    /**
     * Set arcint
     *
     * @param integer $arcint
     * @return Archive
     */
    public function setArcint($arcint)
    {
        $this->arcint = $arcint;

        return $this;
    }

    /**
     * Get arcint
     *
     * @return integer 
     */
    public function getArcint()
    {
        return $this->arcint;
    }

    /**
     * Set barometer
     *
     * @param float $barometer
     * @return Archive
     */
    public function setBarometer($barometer)
    {
        $this->barometer = $barometer;

        return $this;
    }

    /**
     * Get barometer
     *
     * @return float 
     */
    public function getBarometer()
    {
        return $this->barometer;
    }

    /**
     * Set intemp
     *
     * @param float $intemp
     * @return Archive
     */
    public function setIntemp($intemp)
    {
        $this->intemp = $intemp;

        return $this;
    }

    /**
     * Get intemp
     *
     * @return float 
     */
    public function getIntemp()
    {
        return $this->intemp;
    }

    /**
     * Set inhumidity
     *
     * @param float $inhumidity
     * @return Archive
     */
    public function setInhumidity($inhumidity)
    {
        $this->inhumidity = $inhumidity;

        return $this;
    }

    /**
     * Get inhumidity
     *
     * @return float 
     */
    public function getInhumidity()
    {
        return $this->inhumidity;
    }

    /**
     * Set windspeed
     *
     * @param float $windspeed
     * @return Archive
     */
    public function setWindspeed($windspeed)
    {
        $this->windspeed = $windspeed;

        return $this;
    }

    /**
     * Get windspeed
     *
     * @return float 
     */
    public function getWindspeed()
    {
        return $this->windspeed;
    }

    /**
     * Set winddir
     *
     * @param float $winddir
     * @return Archive
     */
    public function setWinddir($winddir)
    {
        $this->winddir = $winddir;

        return $this;
    }

    /**
     * Get winddir
     *
     * @return float 
     */
    public function getWinddir()
    {
        return $this->winddir;
    }

    /**
     * Set windgust
     *
     * @param float $windgust
     * @return Archive
     */
    public function setWindgust($windgust)
    {
        $this->windgust = $windgust;

        return $this;
    }

    /**
     * Get windgust
     *
     * @return float 
     */
    public function getWindgust()
    {
        return $this->windgust;
    }

    /**
     * Set rain
     *
     * @param float $rain
     * @return Archive
     */
    public function setRain($rain)
    {
        $this->rain = $rain;

        return $this;
    }

    /**
     * Get rain
     *
     * @return float 
     */
    public function getRain()
    {
        return $this->rain;
    }

    /**
     * Set windchill
     *
     * @param float $windchill
     * @return Archive
     */
    public function setWindchill($windchill)
    {
        $this->windchill = $windchill;

        return $this;
    }

    /**
     * Get windchill
     *
     * @return float 
     */
    public function getWindchill()
    {
        return $this->windchill;
    }

    /**
     * Set uv
     *
     * @param float $uv
     * @return Archive
     */
    public function setUv($uv)
    {
        $this->uv = $uv;

        return $this;
    }

    /**
     * Get uv
     *
     * @return float 
     */
    public function getUv()
    {
        return $this->uv;
    }

    /**
     * Set forecast
     *
     * @param string $forecast
     * @return Archive
     */
    public function setForecast($forecast)
    {
        $this->forecast = $forecast;

        return $this;
    }

    /**
     * Get forecast
     *
     * @return string 
     */
    public function getForecast()
    {
        return $this->forecast;
    }

    /**
     * Set stormwarning
     *
     * @param integer $stormwarning
     * @return Archive
     */
    public function setStormwarning($stormwarning)
    {
        $this->stormwarning = $stormwarning;

        return $this;
    }

    /**
     * Get stormwarning
     *
     * @return integer 
     */
    public function getStormwarning()
    {
        return $this->stormwarning;
    }

    /**
     * Set sensor1temp
     *
     * @param float $sensor1temp
     * @return Archive
     */
    public function setSensor1temp($sensor1temp)
    {
        $this->sensor1temp = $sensor1temp;

        return $this;
    }

    /**
     * Get sensor1temp
     *
     * @return float 
     */
    public function getSensor1temp()
    {
        return $this->sensor1temp;
    }

    /**
     * Set sensor1humid
     *
     * @param float $sensor1humid
     * @return Archive
     */
    public function setSensor1humid($sensor1humid)
    {
        $this->sensor1humid = $sensor1humid;

        return $this;
    }

    /**
     * Get sensor1humid
     *
     * @return float 
     */
    public function getSensor1humid()
    {
        return $this->sensor1humid;
    }

    /**
     * Set sensor2temp
     *
     * @param float $sensor2temp
     * @return Archive
     */
    public function setSensor2temp($sensor2temp)
    {
        $this->sensor2temp = $sensor2temp;

        return $this;
    }

    /**
     * Get sensor2temp
     *
     * @return float 
     */
    public function getSensor2temp()
    {
        return $this->sensor2temp;
    }

    /**
     * Set sensor2humid
     *
     * @param float $sensor2humid
     * @return Archive
     */
    public function setSensor2humid($sensor2humid)
    {
        $this->sensor2humid = $sensor2humid;

        return $this;
    }

    /**
     * Get sensor2humid
     *
     * @return float 
     */
    public function getSensor2humid()
    {
        return $this->sensor2humid;
    }

    /**
     * Set sensor3temp
     *
     * @param float $sensor3temp
     * @return Archive
     */
    public function setSensor3temp($sensor3temp)
    {
        $this->sensor3temp = $sensor3temp;

        return $this;
    }

    /**
     * Get sensor3temp
     *
     * @return float 
     */
    public function getSensor3temp()
    {
        return $this->sensor3temp;
    }

    /**
     * Set sensor3humid
     *
     * @param float $sensor3humid
     * @return Archive
     */
    public function setSensor3humid($sensor3humid)
    {
        $this->sensor3humid = $sensor3humid;

        return $this;
    }

    /**
     * Get sensor3humid
     *
     * @return float 
     */
    public function getSensor3humid()
    {
        return $this->sensor3humid;
    }

    /**
     * Set sensor4temp
     *
     * @param float $sensor4temp
     * @return Archive
     */
    public function setSensor4temp($sensor4temp)
    {
        $this->sensor4temp = $sensor4temp;

        return $this;
    }

    /**
     * Get sensor4temp
     *
     * @return float 
     */
    public function getSensor4temp()
    {
        return $this->sensor4temp;
    }

    /**
     * Set sensor4humid
     *
     * @param float $sensor4humid
     * @return Archive
     */
    public function setSensor4humid($sensor4humid)
    {
        $this->sensor4humid = $sensor4humid;

        return $this;
    }

    /**
     * Get sensor4humid
     *
     * @return float 
     */
    public function getSensor4humid()
    {
        return $this->sensor4humid;
    }

    /**
     * Set sensor5temp
     *
     * @param float $sensor5temp
     * @return Archive
     */
    public function setSensor5temp($sensor5temp)
    {
        $this->sensor5temp = $sensor5temp;

        return $this;
    }

    /**
     * Get sensor5temp
     *
     * @return float 
     */
    public function getSensor5temp()
    {
        return $this->sensor5temp;
    }

    /**
     * Set sensor5humid
     *
     * @param float $sensor5humid
     * @return Archive
     */
    public function setSensor5humid($sensor5humid)
    {
        $this->sensor5humid = $sensor5humid;

        return $this;
    }

    /**
     * Get sensor5humid
     *
     * @return float 
     */
    public function getSensor5humid()
    {
        return $this->sensor5humid;
    }

    /**
     * Set windbatterystatus
     *
     * @param float $windbatterystatus
     * @return Archive
     */
    public function setWindbatterystatus($windbatterystatus)
    {
        $this->windbatterystatus = $windbatterystatus;

        return $this;
    }

    /**
     * Get windbatterystatus
     *
     * @return float 
     */
    public function getWindbatterystatus()
    {
        return $this->windbatterystatus;
    }

    /**
     * Set rainbatterystatus
     *
     * @param float $rainbatterystatus
     * @return Archive
     */
    public function setRainbatterystatus($rainbatterystatus)
    {
        $this->rainbatterystatus = $rainbatterystatus;

        return $this;
    }

    /**
     * Get rainbatterystatus
     *
     * @return float 
     */
    public function getRainbatterystatus()
    {
        return $this->rainbatterystatus;
    }

    /**
     * Set sensor1batterystatus
     *
     * @param float $sensor1batterystatus
     * @return Archive
     */
    public function setSensor1batterystatus($sensor1batterystatus)
    {
        $this->sensor1batterystatus = $sensor1batterystatus;

        return $this;
    }

    /**
     * Get sensor1batterystatus
     *
     * @return float 
     */
    public function getSensor1batterystatus()
    {
        return $this->sensor1batterystatus;
    }

    /**
     * Set sensor2batterystatus
     *
     * @param float $sensor2batterystatus
     * @return Archive
     */
    public function setSensor2batterystatus($sensor2batterystatus)
    {
        $this->sensor2batterystatus = $sensor2batterystatus;

        return $this;
    }

    /**
     * Get sensor2batterystatus
     *
     * @return float 
     */
    public function getSensor2batterystatus()
    {
        return $this->sensor2batterystatus;
    }

    /**
     * Set sensor3batterystatus
     *
     * @param float $sensor3batterystatus
     * @return Archive
     */
    public function setSensor3batterystatus($sensor3batterystatus)
    {
        $this->sensor3batterystatus = $sensor3batterystatus;

        return $this;
    }

    /**
     * Get sensor3batterystatus
     *
     * @return float 
     */
    public function getSensor3batterystatus()
    {
        return $this->sensor3batterystatus;
    }

    /**
     * Set sensor4batterystatus
     *
     * @param float $sensor4batterystatus
     * @return Archive
     */
    public function setSensor4batterystatus($sensor4batterystatus)
    {
        $this->sensor4batterystatus = $sensor4batterystatus;

        return $this;
    }

    /**
     * Get sensor4batterystatus
     *
     * @return float 
     */
    public function getSensor4batterystatus()
    {
        return $this->sensor4batterystatus;
    }

    /**
     * Set sensor5batterystatus
     *
     * @param float $sensor5batterystatus
     * @return Archive
     */
    public function setSensor5batterystatus($sensor5batterystatus)
    {
        $this->sensor5batterystatus = $sensor5batterystatus;

        return $this;
    }

    /**
     * Get sensor5batterystatus
     *
     * @return float 
     */
    public function getSensor5batterystatus()
    {
        return $this->sensor5batterystatus;
    }
}
