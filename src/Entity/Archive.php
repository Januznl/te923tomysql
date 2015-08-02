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
     * @ORM\Column(name="pressure", type="float", precision=10, scale=0, nullable=true)
     */
    private $pressure;

    /**
     * @var float
     *
     * @ORM\Column(name="altimeter", type="float", precision=10, scale=0, nullable=true)
     */
    private $altimeter;

    /**
     * @var float
     *
     * @ORM\Column(name="inTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $intemp;

    /**
     * @var float
     *
     * @ORM\Column(name="outTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $outtemp;

    /**
     * @var float
     *
     * @ORM\Column(name="inHumidity", type="float", precision=10, scale=0, nullable=true)
     */
    private $inhumidity;

    /**
     * @var float
     *
     * @ORM\Column(name="outHumidity", type="float", precision=10, scale=0, nullable=true)
     */
    private $outhumidity;

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
     * @ORM\Column(name="windGustDir", type="float", precision=10, scale=0, nullable=true)
     */
    private $windgustdir;

    /**
     * @var float
     *
     * @ORM\Column(name="rainRate", type="float", precision=10, scale=0, nullable=true)
     */
    private $rainrate;

    /**
     * @var float
     *
     * @ORM\Column(name="rain", type="float", precision=10, scale=0, nullable=true)
     */
    private $rain;

    /**
     * @var float
     *
     * @ORM\Column(name="dewpoint", type="float", precision=10, scale=0, nullable=true)
     */
    private $dewpoint;

    /**
     * @var float
     *
     * @ORM\Column(name="windchill", type="float", precision=10, scale=0, nullable=true)
     */
    private $windchill;

    /**
     * @var float
     *
     * @ORM\Column(name="heatindex", type="float", precision=10, scale=0, nullable=true)
     */
    private $heatindex;

    /**
     * @var float
     *
     * @ORM\Column(name="ET", type="float", precision=10, scale=0, nullable=true)
     */
    private $et;

    /**
     * @var float
     *
     * @ORM\Column(name="radiation", type="float", precision=10, scale=0, nullable=true)
     */
    private $radiation;

    /**
     * @var float
     *
     * @ORM\Column(name="UV", type="float", precision=10, scale=0, nullable=true)
     */
    private $uv;

    /**
     * @var float
     *
     * @ORM\Column(name="extraTemp1", type="float", precision=10, scale=0, nullable=true)
     */
    private $extratemp1;

    /**
     * @var float
     *
     * @ORM\Column(name="extraTemp2", type="float", precision=10, scale=0, nullable=true)
     */
    private $extratemp2;

    /**
     * @var float
     *
     * @ORM\Column(name="extraTemp3", type="float", precision=10, scale=0, nullable=true)
     */
    private $extratemp3;

    /**
     * @var float
     *
     * @ORM\Column(name="soilTemp1", type="float", precision=10, scale=0, nullable=true)
     */
    private $soiltemp1;

    /**
     * @var float
     *
     * @ORM\Column(name="soilTemp2", type="float", precision=10, scale=0, nullable=true)
     */
    private $soiltemp2;

    /**
     * @var float
     *
     * @ORM\Column(name="soilTemp3", type="float", precision=10, scale=0, nullable=true)
     */
    private $soiltemp3;

    /**
     * @var float
     *
     * @ORM\Column(name="soilTemp4", type="float", precision=10, scale=0, nullable=true)
     */
    private $soiltemp4;

    /**
     * @var float
     *
     * @ORM\Column(name="leafTemp1", type="float", precision=10, scale=0, nullable=true)
     */
    private $leaftemp1;

    /**
     * @var float
     *
     * @ORM\Column(name="leafTemp2", type="float", precision=10, scale=0, nullable=true)
     */
    private $leaftemp2;

    /**
     * @var float
     *
     * @ORM\Column(name="extraHumid1", type="float", precision=10, scale=0, nullable=true)
     */
    private $extrahumid1;

    /**
     * @var float
     *
     * @ORM\Column(name="extraHumid2", type="float", precision=10, scale=0, nullable=true)
     */
    private $extrahumid2;

    /**
     * @var float
     *
     * @ORM\Column(name="soilMoist1", type="float", precision=10, scale=0, nullable=true)
     */
    private $soilmoist1;

    /**
     * @var float
     *
     * @ORM\Column(name="soilMoist2", type="float", precision=10, scale=0, nullable=true)
     */
    private $soilmoist2;

    /**
     * @var float
     *
     * @ORM\Column(name="soilMoist3", type="float", precision=10, scale=0, nullable=true)
     */
    private $soilmoist3;

    /**
     * @var float
     *
     * @ORM\Column(name="soilMoist4", type="float", precision=10, scale=0, nullable=true)
     */
    private $soilmoist4;

    /**
     * @var float
     *
     * @ORM\Column(name="leafWet1", type="float", precision=10, scale=0, nullable=true)
     */
    private $leafwet1;

    /**
     * @var float
     *
     * @ORM\Column(name="leafWet2", type="float", precision=10, scale=0, nullable=true)
     */
    private $leafwet2;

    /**
     * @var float
     *
     * @ORM\Column(name="rxCheckPercent", type="float", precision=10, scale=0, nullable=true)
     */
    private $rxcheckpercent;

    /**
     * @var float
     *
     * @ORM\Column(name="txBatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $txbatterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="consBatteryVoltage", type="float", precision=10, scale=0, nullable=true)
     */
    private $consbatteryvoltage;

    /**
     * @var float
     *
     * @ORM\Column(name="hail", type="float", precision=10, scale=0, nullable=true)
     */
    private $hail;

    /**
     * @var float
     *
     * @ORM\Column(name="hailRate", type="float", precision=10, scale=0, nullable=true)
     */
    private $hailrate;

    /**
     * @var float
     *
     * @ORM\Column(name="heatingTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $heatingtemp;

    /**
     * @var float
     *
     * @ORM\Column(name="heatingVoltage", type="float", precision=10, scale=0, nullable=true)
     */
    private $heatingvoltage;

    /**
     * @var float
     *
     * @ORM\Column(name="supplyVoltage", type="float", precision=10, scale=0, nullable=true)
     */
    private $supplyvoltage;

    /**
     * @var float
     *
     * @ORM\Column(name="referenceVoltage", type="float", precision=10, scale=0, nullable=true)
     */
    private $referencevoltage;

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
     * @ORM\Column(name="outTempBatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $outtempbatterystatus;

    /**
     * @var float
     *
     * @ORM\Column(name="inTempBatteryStatus", type="float", precision=10, scale=0, nullable=true)
     */
    private $intempbatterystatus;



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
     * Set pressure
     *
     * @param float $pressure
     * @return Archive
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return float 
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set altimeter
     *
     * @param float $altimeter
     * @return Archive
     */
    public function setAltimeter($altimeter)
    {
        $this->altimeter = $altimeter;

        return $this;
    }

    /**
     * Get altimeter
     *
     * @return float 
     */
    public function getAltimeter()
    {
        return $this->altimeter;
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
     * Set outtemp
     *
     * @param float $outtemp
     * @return Archive
     */
    public function setOuttemp($outtemp)
    {
        $this->outtemp = $outtemp;

        return $this;
    }

    /**
     * Get outtemp
     *
     * @return float 
     */
    public function getOuttemp()
    {
        return $this->outtemp;
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
     * Set outhumidity
     *
     * @param float $outhumidity
     * @return Archive
     */
    public function setOuthumidity($outhumidity)
    {
        $this->outhumidity = $outhumidity;

        return $this;
    }

    /**
     * Get outhumidity
     *
     * @return float 
     */
    public function getOuthumidity()
    {
        return $this->outhumidity;
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
     * Set windgustdir
     *
     * @param float $windgustdir
     * @return Archive
     */
    public function setWindgustdir($windgustdir)
    {
        $this->windgustdir = $windgustdir;

        return $this;
    }

    /**
     * Get windgustdir
     *
     * @return float 
     */
    public function getWindgustdir()
    {
        return $this->windgustdir;
    }

    /**
     * Set rainrate
     *
     * @param float $rainrate
     * @return Archive
     */
    public function setRainrate($rainrate)
    {
        $this->rainrate = $rainrate;

        return $this;
    }

    /**
     * Get rainrate
     *
     * @return float 
     */
    public function getRainrate()
    {
        return $this->rainrate;
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
     * Set dewpoint
     *
     * @param float $dewpoint
     * @return Archive
     */
    public function setDewpoint($dewpoint)
    {
        $this->dewpoint = $dewpoint;

        return $this;
    }

    /**
     * Get dewpoint
     *
     * @return float 
     */
    public function getDewpoint()
    {
        return $this->dewpoint;
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
     * Set heatindex
     *
     * @param float $heatindex
     * @return Archive
     */
    public function setHeatindex($heatindex)
    {
        $this->heatindex = $heatindex;

        return $this;
    }

    /**
     * Get heatindex
     *
     * @return float 
     */
    public function getHeatindex()
    {
        return $this->heatindex;
    }

    /**
     * Set et
     *
     * @param float $et
     * @return Archive
     */
    public function setEt($et)
    {
        $this->et = $et;

        return $this;
    }

    /**
     * Get et
     *
     * @return float 
     */
    public function getEt()
    {
        return $this->et;
    }

    /**
     * Set radiation
     *
     * @param float $radiation
     * @return Archive
     */
    public function setRadiation($radiation)
    {
        $this->radiation = $radiation;

        return $this;
    }

    /**
     * Get radiation
     *
     * @return float 
     */
    public function getRadiation()
    {
        return $this->radiation;
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
     * Set extratemp1
     *
     * @param float $extratemp1
     * @return Archive
     */
    public function setExtratemp1($extratemp1)
    {
        $this->extratemp1 = $extratemp1;

        return $this;
    }

    /**
     * Get extratemp1
     *
     * @return float 
     */
    public function getExtratemp1()
    {
        return $this->extratemp1;
    }

    /**
     * Set extratemp2
     *
     * @param float $extratemp2
     * @return Archive
     */
    public function setExtratemp2($extratemp2)
    {
        $this->extratemp2 = $extratemp2;

        return $this;
    }

    /**
     * Get extratemp2
     *
     * @return float 
     */
    public function getExtratemp2()
    {
        return $this->extratemp2;
    }

    /**
     * Set extratemp3
     *
     * @param float $extratemp3
     * @return Archive
     */
    public function setExtratemp3($extratemp3)
    {
        $this->extratemp3 = $extratemp3;

        return $this;
    }

    /**
     * Get extratemp3
     *
     * @return float 
     */
    public function getExtratemp3()
    {
        return $this->extratemp3;
    }

    /**
     * Set soiltemp1
     *
     * @param float $soiltemp1
     * @return Archive
     */
    public function setSoiltemp1($soiltemp1)
    {
        $this->soiltemp1 = $soiltemp1;

        return $this;
    }

    /**
     * Get soiltemp1
     *
     * @return float 
     */
    public function getSoiltemp1()
    {
        return $this->soiltemp1;
    }

    /**
     * Set soiltemp2
     *
     * @param float $soiltemp2
     * @return Archive
     */
    public function setSoiltemp2($soiltemp2)
    {
        $this->soiltemp2 = $soiltemp2;

        return $this;
    }

    /**
     * Get soiltemp2
     *
     * @return float 
     */
    public function getSoiltemp2()
    {
        return $this->soiltemp2;
    }

    /**
     * Set soiltemp3
     *
     * @param float $soiltemp3
     * @return Archive
     */
    public function setSoiltemp3($soiltemp3)
    {
        $this->soiltemp3 = $soiltemp3;

        return $this;
    }

    /**
     * Get soiltemp3
     *
     * @return float 
     */
    public function getSoiltemp3()
    {
        return $this->soiltemp3;
    }

    /**
     * Set soiltemp4
     *
     * @param float $soiltemp4
     * @return Archive
     */
    public function setSoiltemp4($soiltemp4)
    {
        $this->soiltemp4 = $soiltemp4;

        return $this;
    }

    /**
     * Get soiltemp4
     *
     * @return float 
     */
    public function getSoiltemp4()
    {
        return $this->soiltemp4;
    }

    /**
     * Set leaftemp1
     *
     * @param float $leaftemp1
     * @return Archive
     */
    public function setLeaftemp1($leaftemp1)
    {
        $this->leaftemp1 = $leaftemp1;

        return $this;
    }

    /**
     * Get leaftemp1
     *
     * @return float 
     */
    public function getLeaftemp1()
    {
        return $this->leaftemp1;
    }

    /**
     * Set leaftemp2
     *
     * @param float $leaftemp2
     * @return Archive
     */
    public function setLeaftemp2($leaftemp2)
    {
        $this->leaftemp2 = $leaftemp2;

        return $this;
    }

    /**
     * Get leaftemp2
     *
     * @return float 
     */
    public function getLeaftemp2()
    {
        return $this->leaftemp2;
    }

    /**
     * Set extrahumid1
     *
     * @param float $extrahumid1
     * @return Archive
     */
    public function setExtrahumid1($extrahumid1)
    {
        $this->extrahumid1 = $extrahumid1;

        return $this;
    }

    /**
     * Get extrahumid1
     *
     * @return float 
     */
    public function getExtrahumid1()
    {
        return $this->extrahumid1;
    }

    /**
     * Set extrahumid2
     *
     * @param float $extrahumid2
     * @return Archive
     */
    public function setExtrahumid2($extrahumid2)
    {
        $this->extrahumid2 = $extrahumid2;

        return $this;
    }

    /**
     * Get extrahumid2
     *
     * @return float 
     */
    public function getExtrahumid2()
    {
        return $this->extrahumid2;
    }

    /**
     * Set soilmoist1
     *
     * @param float $soilmoist1
     * @return Archive
     */
    public function setSoilmoist1($soilmoist1)
    {
        $this->soilmoist1 = $soilmoist1;

        return $this;
    }

    /**
     * Get soilmoist1
     *
     * @return float 
     */
    public function getSoilmoist1()
    {
        return $this->soilmoist1;
    }

    /**
     * Set soilmoist2
     *
     * @param float $soilmoist2
     * @return Archive
     */
    public function setSoilmoist2($soilmoist2)
    {
        $this->soilmoist2 = $soilmoist2;

        return $this;
    }

    /**
     * Get soilmoist2
     *
     * @return float 
     */
    public function getSoilmoist2()
    {
        return $this->soilmoist2;
    }

    /**
     * Set soilmoist3
     *
     * @param float $soilmoist3
     * @return Archive
     */
    public function setSoilmoist3($soilmoist3)
    {
        $this->soilmoist3 = $soilmoist3;

        return $this;
    }

    /**
     * Get soilmoist3
     *
     * @return float 
     */
    public function getSoilmoist3()
    {
        return $this->soilmoist3;
    }

    /**
     * Set soilmoist4
     *
     * @param float $soilmoist4
     * @return Archive
     */
    public function setSoilmoist4($soilmoist4)
    {
        $this->soilmoist4 = $soilmoist4;

        return $this;
    }

    /**
     * Get soilmoist4
     *
     * @return float 
     */
    public function getSoilmoist4()
    {
        return $this->soilmoist4;
    }

    /**
     * Set leafwet1
     *
     * @param float $leafwet1
     * @return Archive
     */
    public function setLeafwet1($leafwet1)
    {
        $this->leafwet1 = $leafwet1;

        return $this;
    }

    /**
     * Get leafwet1
     *
     * @return float 
     */
    public function getLeafwet1()
    {
        return $this->leafwet1;
    }

    /**
     * Set leafwet2
     *
     * @param float $leafwet2
     * @return Archive
     */
    public function setLeafwet2($leafwet2)
    {
        $this->leafwet2 = $leafwet2;

        return $this;
    }

    /**
     * Get leafwet2
     *
     * @return float 
     */
    public function getLeafwet2()
    {
        return $this->leafwet2;
    }

    /**
     * Set rxcheckpercent
     *
     * @param float $rxcheckpercent
     * @return Archive
     */
    public function setRxcheckpercent($rxcheckpercent)
    {
        $this->rxcheckpercent = $rxcheckpercent;

        return $this;
    }

    /**
     * Get rxcheckpercent
     *
     * @return float 
     */
    public function getRxcheckpercent()
    {
        return $this->rxcheckpercent;
    }

    /**
     * Set txbatterystatus
     *
     * @param float $txbatterystatus
     * @return Archive
     */
    public function setTxbatterystatus($txbatterystatus)
    {
        $this->txbatterystatus = $txbatterystatus;

        return $this;
    }

    /**
     * Get txbatterystatus
     *
     * @return float 
     */
    public function getTxbatterystatus()
    {
        return $this->txbatterystatus;
    }

    /**
     * Set consbatteryvoltage
     *
     * @param float $consbatteryvoltage
     * @return Archive
     */
    public function setConsbatteryvoltage($consbatteryvoltage)
    {
        $this->consbatteryvoltage = $consbatteryvoltage;

        return $this;
    }

    /**
     * Get consbatteryvoltage
     *
     * @return float 
     */
    public function getConsbatteryvoltage()
    {
        return $this->consbatteryvoltage;
    }

    /**
     * Set hail
     *
     * @param float $hail
     * @return Archive
     */
    public function setHail($hail)
    {
        $this->hail = $hail;

        return $this;
    }

    /**
     * Get hail
     *
     * @return float 
     */
    public function getHail()
    {
        return $this->hail;
    }

    /**
     * Set hailrate
     *
     * @param float $hailrate
     * @return Archive
     */
    public function setHailrate($hailrate)
    {
        $this->hailrate = $hailrate;

        return $this;
    }

    /**
     * Get hailrate
     *
     * @return float 
     */
    public function getHailrate()
    {
        return $this->hailrate;
    }

    /**
     * Set heatingtemp
     *
     * @param float $heatingtemp
     * @return Archive
     */
    public function setHeatingtemp($heatingtemp)
    {
        $this->heatingtemp = $heatingtemp;

        return $this;
    }

    /**
     * Get heatingtemp
     *
     * @return float 
     */
    public function getHeatingtemp()
    {
        return $this->heatingtemp;
    }

    /**
     * Set heatingvoltage
     *
     * @param float $heatingvoltage
     * @return Archive
     */
    public function setHeatingvoltage($heatingvoltage)
    {
        $this->heatingvoltage = $heatingvoltage;

        return $this;
    }

    /**
     * Get heatingvoltage
     *
     * @return float 
     */
    public function getHeatingvoltage()
    {
        return $this->heatingvoltage;
    }

    /**
     * Set supplyvoltage
     *
     * @param float $supplyvoltage
     * @return Archive
     */
    public function setSupplyvoltage($supplyvoltage)
    {
        $this->supplyvoltage = $supplyvoltage;

        return $this;
    }

    /**
     * Get supplyvoltage
     *
     * @return float 
     */
    public function getSupplyvoltage()
    {
        return $this->supplyvoltage;
    }

    /**
     * Set referencevoltage
     *
     * @param float $referencevoltage
     * @return Archive
     */
    public function setReferencevoltage($referencevoltage)
    {
        $this->referencevoltage = $referencevoltage;

        return $this;
    }

    /**
     * Get referencevoltage
     *
     * @return float 
     */
    public function getReferencevoltage()
    {
        return $this->referencevoltage;
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
     * Set outtempbatterystatus
     *
     * @param float $outtempbatterystatus
     * @return Archive
     */
    public function setOuttempbatterystatus($outtempbatterystatus)
    {
        $this->outtempbatterystatus = $outtempbatterystatus;

        return $this;
    }

    /**
     * Get outtempbatterystatus
     *
     * @return float
     */
    public function getOuttempbatterystatus()
    {
        return $this->outtempbatterystatus;
    }

    /**
     * Set intempbatterystatus
     *
     * @param float $intempbatterystatus
     * @return Archive
     */
    public function setIntempbatterystatus($intempbatterystatus)
    {
        $this->intempbatterystatus = $intempbatterystatus;

        return $this;
    }

    /**
     * Get intempbatterystatus
     *
     * @return float
     */
    public function getIntempbatterystatus()
    {
        return $this->intempbatterystatus;
    }
}
