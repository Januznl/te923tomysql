<?php

namespace TE923ToMysql\Lib\Config;

use Symfony\Component\Yaml\Yaml;

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

    /* @var boolean */
    protected $debug;

    /* @var array */
    protected $entityPaths;

    /* @var string */
    protected $proxyDir;

    /* @var string */
    protected $cacheType;

    /* @var boolean */
    protected $useSimpleAnnotationReader;


    public function __construct(Config $config)
    {
        $te923tomysql = $config->getType('te923tomysql');
        $doctrine = $config->getType('doctrine');

        //connection settings
        $driver = isset($doctrine['driver']) ? $doctrine['driver'] : "";
        $host = isset($doctrine['host']) ? $doctrine['host'] : "";
        $dbname = isset($doctrine['dbname']) ? $doctrine['dbname'] : "";
        $user = isset($doctrine['user']) ? $doctrine['user'] : "";
        $password = isset($doctrine['password']) ? $doctrine['password'] : "";

        //Doctrine settings
        $doctrineSettings = $te923tomysql['doctrine'];
        $this->debug = isset($doctrineSettings['debug']) ? $doctrineSettings['debug'] : false;
        $this->entityPaths = isset($doctrineSettings['entityPaths']) ? $doctrineSettings['entityPaths'] : "";
        $this->proxyDir = isset($doctrineSettings['proxyDir']) ? $doctrineSettings['proxyDir'] : null;
        $this->cacheType = isset($doctrineSettings['cacheType']) ? $doctrineSettings['cacheType'] : "";
        $this->useSimpleAnnotationReader = isset($doctrineSettings['useSimpleAnnotationReader']) ? $doctrineSettings['useSimpleAnnotationReader'] : false;

        if ($driver != "" && $host != "" && $user != "") {
            $this->driver = $driver;
            $this->host = $host;
            $this->dbname = $dbname;
            $this->user = $user;
            $this->password = $password;
        } else {
            throw new \Exception("Config is incomplete...");
        }


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
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return boolean
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * @return array
     */
    public function getEntityPaths()
    {
        return $this->entityPaths;
    }

    /**
     * @return string
     */
    public function getProxyDir()
    {
        return $this->proxyDir;
    }

    /**
     * @return string
     */
    public function getCacheType()
    {
        return $this->cacheType;
    }

    /**
     * @return boolean
     */
    public function isUseSimpleAnnotationReader()
    {
        return $this->useSimpleAnnotationReader;
    }
}
