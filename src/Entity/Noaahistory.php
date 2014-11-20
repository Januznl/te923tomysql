<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Noaahistory
 *
 * @ORM\Table(name="noaaHistory")
 * @ORM\Entity
 */
class Noaahistory
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
     * @var float
     *
     * @ORM\Column(name="meanTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $meantemp;

    /**
     * @var float
     *
     * @ORM\Column(name="highTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $hightemp;

    /**
     * @var integer
     *
     * @ORM\Column(name="highTempTime", type="integer", nullable=true)
     */
    private $hightemptime;

    /**
     * @var float
     *
     * @ORM\Column(name="lowTemp", type="float", precision=10, scale=0, nullable=true)
     */
    private $lowtemp;

    /**
     * @var integer
     *
     * @ORM\Column(name="lowTempTime", type="integer", nullable=true)
     */
    private $lowtemptime;

    /**
     * @var float
     *
     * @ORM\Column(name="heatDegDays", type="float", precision=10, scale=0, nullable=true)
     */
    private $heatdegdays;

    /**
     * @var float
     *
     * @ORM\Column(name="coolDegDays", type="float", precision=10, scale=0, nullable=true)
     */
    private $cooldegdays;

    /**
     * @var float
     *
     * @ORM\Column(name="rain", type="float", precision=10, scale=0, nullable=true)
     */
    private $rain;

    /**
     * @var float
     *
     * @ORM\Column(name="avgWind", type="float", precision=10, scale=0, nullable=true)
     */
    private $avgwind;

    /**
     * @var float
     *
     * @ORM\Column(name="highWind", type="float", precision=10, scale=0, nullable=true)
     */
    private $highwind;

    /**
     * @var integer
     *
     * @ORM\Column(name="highWindTime", type="integer", nullable=true)
     */
    private $highwindtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="domWindDir", type="integer", nullable=true)
     */
    private $domwinddir;



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
     * Set meantemp
     *
     * @param float $meantemp
     * @return Noaahistory
     */
    public function setMeantemp($meantemp)
    {
        $this->meantemp = $meantemp;

        return $this;
    }

    /**
     * Get meantemp
     *
     * @return float 
     */
    public function getMeantemp()
    {
        return $this->meantemp;
    }

    /**
     * Set hightemp
     *
     * @param float $hightemp
     * @return Noaahistory
     */
    public function setHightemp($hightemp)
    {
        $this->hightemp = $hightemp;

        return $this;
    }

    /**
     * Get hightemp
     *
     * @return float 
     */
    public function getHightemp()
    {
        return $this->hightemp;
    }

    /**
     * Set hightemptime
     *
     * @param integer $hightemptime
     * @return Noaahistory
     */
    public function setHightemptime($hightemptime)
    {
        $this->hightemptime = $hightemptime;

        return $this;
    }

    /**
     * Get hightemptime
     *
     * @return integer 
     */
    public function getHightemptime()
    {
        return $this->hightemptime;
    }

    /**
     * Set lowtemp
     *
     * @param float $lowtemp
     * @return Noaahistory
     */
    public function setLowtemp($lowtemp)
    {
        $this->lowtemp = $lowtemp;

        return $this;
    }

    /**
     * Get lowtemp
     *
     * @return float 
     */
    public function getLowtemp()
    {
        return $this->lowtemp;
    }

    /**
     * Set lowtemptime
     *
     * @param integer $lowtemptime
     * @return Noaahistory
     */
    public function setLowtemptime($lowtemptime)
    {
        $this->lowtemptime = $lowtemptime;

        return $this;
    }

    /**
     * Get lowtemptime
     *
     * @return integer 
     */
    public function getLowtemptime()
    {
        return $this->lowtemptime;
    }

    /**
     * Set heatdegdays
     *
     * @param float $heatdegdays
     * @return Noaahistory
     */
    public function setHeatdegdays($heatdegdays)
    {
        $this->heatdegdays = $heatdegdays;

        return $this;
    }

    /**
     * Get heatdegdays
     *
     * @return float 
     */
    public function getHeatdegdays()
    {
        return $this->heatdegdays;
    }

    /**
     * Set cooldegdays
     *
     * @param float $cooldegdays
     * @return Noaahistory
     */
    public function setCooldegdays($cooldegdays)
    {
        $this->cooldegdays = $cooldegdays;

        return $this;
    }

    /**
     * Get cooldegdays
     *
     * @return float 
     */
    public function getCooldegdays()
    {
        return $this->cooldegdays;
    }

    /**
     * Set rain
     *
     * @param float $rain
     * @return Noaahistory
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
     * Set avgwind
     *
     * @param float $avgwind
     * @return Noaahistory
     */
    public function setAvgwind($avgwind)
    {
        $this->avgwind = $avgwind;

        return $this;
    }

    /**
     * Get avgwind
     *
     * @return float 
     */
    public function getAvgwind()
    {
        return $this->avgwind;
    }

    /**
     * Set highwind
     *
     * @param float $highwind
     * @return Noaahistory
     */
    public function setHighwind($highwind)
    {
        $this->highwind = $highwind;

        return $this;
    }

    /**
     * Get highwind
     *
     * @return float 
     */
    public function getHighwind()
    {
        return $this->highwind;
    }

    /**
     * Set highwindtime
     *
     * @param integer $highwindtime
     * @return Noaahistory
     */
    public function setHighwindtime($highwindtime)
    {
        $this->highwindtime = $highwindtime;

        return $this;
    }

    /**
     * Get highwindtime
     *
     * @return integer 
     */
    public function getHighwindtime()
    {
        return $this->highwindtime;
    }

    /**
     * Set domwinddir
     *
     * @param integer $domwinddir
     * @return Noaahistory
     */
    public function setDomwinddir($domwinddir)
    {
        $this->domwinddir = $domwinddir;

        return $this;
    }

    /**
     * Get domwinddir
     *
     * @return integer 
     */
    public function getDomwinddir()
    {
        return $this->domwinddir;
    }
}
