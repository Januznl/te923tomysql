<?php

namespace TE923ToMysql\Lib\Config;

class Doctrine
{
    /* @var string */
    protected $driver;

    /* @var string */
    protected $host;

    /* @var string */
    protected $dbname;

    /* @var string */
    protected $user;

    /* @var string */
    protected $password;

    public function __construct($driver, $host, $dbname, $user, $password)
    {
        $this->driver = $driver;
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->$user;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getAllSettings()
    {
        return array(
            'driver'    => $this->driver,
            'host'      => $this->host,
            'dbname'    => $this->dbname,
            'user'      => $this->user,
            'password'  => $this->password,
        );
    }
}
