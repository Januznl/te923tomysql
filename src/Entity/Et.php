<?php

namespace TE923ToMysql\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Et
 *
 * @ORM\Table(name="ET")
 * @ORM\Entity
 */
class Et
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
     * @ORM\Column(name="low", type="float", precision=10, scale=0, nullable=true)
     */
    private $low;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeLow", type="integer", nullable=true)
     */
    private $timelow;

    /**
     * @var float
     *
     * @ORM\Column(name="high", type="float", precision=10, scale=0, nullable=true)
     */
    private $high;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeHigh", type="integer", nullable=true)
     */
    private $timehigh;

    /**
     * @var float
     *
     * @ORM\Column(name="whenHigh", type="float", precision=10, scale=0, nullable=true)
     */
    private $whenhigh;

    /**
     * @var float
     *
     * @ORM\Column(name="cumulative", type="float", precision=10, scale=0, nullable=true)
     */
    private $cumulative;

    /**
     * @var integer
     *
     * @ORM\Column(name="samples", type="integer", nullable=true)
     */
    private $samples;



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
     * Set low
     *
     * @param float $low
     * @return Et
     */
    public function setLow($low)
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get low
     *
     * @return float 
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Set timelow
     *
     * @param integer $timelow
     * @return Et
     */
    public function setTimelow($timelow)
    {
        $this->timelow = $timelow;

        return $this;
    }

    /**
     * Get timelow
     *
     * @return integer 
     */
    public function getTimelow()
    {
        return $this->timelow;
    }

    /**
     * Set high
     *
     * @param float $high
     * @return Et
     */
    public function setHigh($high)
    {
        $this->high = $high;

        return $this;
    }

    /**
     * Get high
     *
     * @return float 
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Set timehigh
     *
     * @param integer $timehigh
     * @return Et
     */
    public function setTimehigh($timehigh)
    {
        $this->timehigh = $timehigh;

        return $this;
    }

    /**
     * Get timehigh
     *
     * @return integer 
     */
    public function getTimehigh()
    {
        return $this->timehigh;
    }

    /**
     * Set whenhigh
     *
     * @param float $whenhigh
     * @return Et
     */
    public function setWhenhigh($whenhigh)
    {
        $this->whenhigh = $whenhigh;

        return $this;
    }

    /**
     * Get whenhigh
     *
     * @return float 
     */
    public function getWhenhigh()
    {
        return $this->whenhigh;
    }

    /**
     * Set cumulative
     *
     * @param float $cumulative
     * @return Et
     */
    public function setCumulative($cumulative)
    {
        $this->cumulative = $cumulative;

        return $this;
    }

    /**
     * Get cumulative
     *
     * @return float 
     */
    public function getCumulative()
    {
        return $this->cumulative;
    }

    /**
     * Set samples
     *
     * @param integer $samples
     * @return Et
     */
    public function setSamples($samples)
    {
        $this->samples = $samples;

        return $this;
    }

    /**
     * Get samples
     *
     * @return integer 
     */
    public function getSamples()
    {
        return $this->samples;
    }
}
