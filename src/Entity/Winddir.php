<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Winddir
 *
 * @ORM\Table(name="windDir")
 * @ORM\Entity
 */
class Winddir
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
     * @ORM\Column(name="bin0", type="integer", nullable=true)
     */
    private $bin0;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin1", type="integer", nullable=true)
     */
    private $bin1;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin2", type="integer", nullable=true)
     */
    private $bin2;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin3", type="integer", nullable=true)
     */
    private $bin3;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin4", type="integer", nullable=true)
     */
    private $bin4;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin5", type="integer", nullable=true)
     */
    private $bin5;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin6", type="integer", nullable=true)
     */
    private $bin6;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin7", type="integer", nullable=true)
     */
    private $bin7;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin8", type="integer", nullable=true)
     */
    private $bin8;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin9", type="integer", nullable=true)
     */
    private $bin9;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin10", type="integer", nullable=true)
     */
    private $bin10;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin11", type="integer", nullable=true)
     */
    private $bin11;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin12", type="integer", nullable=true)
     */
    private $bin12;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin13", type="integer", nullable=true)
     */
    private $bin13;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin14", type="integer", nullable=true)
     */
    private $bin14;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin15", type="integer", nullable=true)
     */
    private $bin15;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin16", type="integer", nullable=true)
     */
    private $bin16;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin17", type="integer", nullable=true)
     */
    private $bin17;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin18", type="integer", nullable=true)
     */
    private $bin18;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin19", type="integer", nullable=true)
     */
    private $bin19;



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
     * Set bin0
     *
     * @param integer $bin0
     * @return Winddir
     */
    public function setBin0($bin0)
    {
        $this->bin0 = $bin0;

        return $this;
    }

    /**
     * Get bin0
     *
     * @return integer 
     */
    public function getBin0()
    {
        return $this->bin0;
    }

    /**
     * Set bin1
     *
     * @param integer $bin1
     * @return Winddir
     */
    public function setBin1($bin1)
    {
        $this->bin1 = $bin1;

        return $this;
    }

    /**
     * Get bin1
     *
     * @return integer 
     */
    public function getBin1()
    {
        return $this->bin1;
    }

    /**
     * Set bin2
     *
     * @param integer $bin2
     * @return Winddir
     */
    public function setBin2($bin2)
    {
        $this->bin2 = $bin2;

        return $this;
    }

    /**
     * Get bin2
     *
     * @return integer 
     */
    public function getBin2()
    {
        return $this->bin2;
    }

    /**
     * Set bin3
     *
     * @param integer $bin3
     * @return Winddir
     */
    public function setBin3($bin3)
    {
        $this->bin3 = $bin3;

        return $this;
    }

    /**
     * Get bin3
     *
     * @return integer 
     */
    public function getBin3()
    {
        return $this->bin3;
    }

    /**
     * Set bin4
     *
     * @param integer $bin4
     * @return Winddir
     */
    public function setBin4($bin4)
    {
        $this->bin4 = $bin4;

        return $this;
    }

    /**
     * Get bin4
     *
     * @return integer 
     */
    public function getBin4()
    {
        return $this->bin4;
    }

    /**
     * Set bin5
     *
     * @param integer $bin5
     * @return Winddir
     */
    public function setBin5($bin5)
    {
        $this->bin5 = $bin5;

        return $this;
    }

    /**
     * Get bin5
     *
     * @return integer 
     */
    public function getBin5()
    {
        return $this->bin5;
    }

    /**
     * Set bin6
     *
     * @param integer $bin6
     * @return Winddir
     */
    public function setBin6($bin6)
    {
        $this->bin6 = $bin6;

        return $this;
    }

    /**
     * Get bin6
     *
     * @return integer 
     */
    public function getBin6()
    {
        return $this->bin6;
    }

    /**
     * Set bin7
     *
     * @param integer $bin7
     * @return Winddir
     */
    public function setBin7($bin7)
    {
        $this->bin7 = $bin7;

        return $this;
    }

    /**
     * Get bin7
     *
     * @return integer 
     */
    public function getBin7()
    {
        return $this->bin7;
    }

    /**
     * Set bin8
     *
     * @param integer $bin8
     * @return Winddir
     */
    public function setBin8($bin8)
    {
        $this->bin8 = $bin8;

        return $this;
    }

    /**
     * Get bin8
     *
     * @return integer 
     */
    public function getBin8()
    {
        return $this->bin8;
    }

    /**
     * Set bin9
     *
     * @param integer $bin9
     * @return Winddir
     */
    public function setBin9($bin9)
    {
        $this->bin9 = $bin9;

        return $this;
    }

    /**
     * Get bin9
     *
     * @return integer 
     */
    public function getBin9()
    {
        return $this->bin9;
    }

    /**
     * Set bin10
     *
     * @param integer $bin10
     * @return Winddir
     */
    public function setBin10($bin10)
    {
        $this->bin10 = $bin10;

        return $this;
    }

    /**
     * Get bin10
     *
     * @return integer 
     */
    public function getBin10()
    {
        return $this->bin10;
    }

    /**
     * Set bin11
     *
     * @param integer $bin11
     * @return Winddir
     */
    public function setBin11($bin11)
    {
        $this->bin11 = $bin11;

        return $this;
    }

    /**
     * Get bin11
     *
     * @return integer 
     */
    public function getBin11()
    {
        return $this->bin11;
    }

    /**
     * Set bin12
     *
     * @param integer $bin12
     * @return Winddir
     */
    public function setBin12($bin12)
    {
        $this->bin12 = $bin12;

        return $this;
    }

    /**
     * Get bin12
     *
     * @return integer 
     */
    public function getBin12()
    {
        return $this->bin12;
    }

    /**
     * Set bin13
     *
     * @param integer $bin13
     * @return Winddir
     */
    public function setBin13($bin13)
    {
        $this->bin13 = $bin13;

        return $this;
    }

    /**
     * Get bin13
     *
     * @return integer 
     */
    public function getBin13()
    {
        return $this->bin13;
    }

    /**
     * Set bin14
     *
     * @param integer $bin14
     * @return Winddir
     */
    public function setBin14($bin14)
    {
        $this->bin14 = $bin14;

        return $this;
    }

    /**
     * Get bin14
     *
     * @return integer 
     */
    public function getBin14()
    {
        return $this->bin14;
    }

    /**
     * Set bin15
     *
     * @param integer $bin15
     * @return Winddir
     */
    public function setBin15($bin15)
    {
        $this->bin15 = $bin15;

        return $this;
    }

    /**
     * Get bin15
     *
     * @return integer 
     */
    public function getBin15()
    {
        return $this->bin15;
    }

    /**
     * Set bin16
     *
     * @param integer $bin16
     * @return Winddir
     */
    public function setBin16($bin16)
    {
        $this->bin16 = $bin16;

        return $this;
    }

    /**
     * Get bin16
     *
     * @return integer 
     */
    public function getBin16()
    {
        return $this->bin16;
    }

    /**
     * Set bin17
     *
     * @param integer $bin17
     * @return Winddir
     */
    public function setBin17($bin17)
    {
        $this->bin17 = $bin17;

        return $this;
    }

    /**
     * Get bin17
     *
     * @return integer 
     */
    public function getBin17()
    {
        return $this->bin17;
    }

    /**
     * Set bin18
     *
     * @param integer $bin18
     * @return Winddir
     */
    public function setBin18($bin18)
    {
        $this->bin18 = $bin18;

        return $this;
    }

    /**
     * Get bin18
     *
     * @return integer 
     */
    public function getBin18()
    {
        return $this->bin18;
    }

    /**
     * Set bin19
     *
     * @param integer $bin19
     * @return Winddir
     */
    public function setBin19($bin19)
    {
        $this->bin19 = $bin19;

        return $this;
    }

    /**
     * Get bin19
     *
     * @return integer 
     */
    public function getBin19()
    {
        return $this->bin19;
    }
}
