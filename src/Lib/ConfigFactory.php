<?php

namespace TE923ToMysql\Lib;

use Symfony\Component\Yaml\Yaml;

class ConfigFactory
{
    protected $configData;

    public function __construct($configPath)
    {
        if (file_exists($configPath)) {
            $this->configData = Yaml::parse($configPath);
        } else {
            //die("Config file does not exists...\n");
            throw new \Exception("Config file does not exists...");
        }
    }

    public function getDoctrine()
    {
        if (isset($this->configData['doctrine'])) {
            $doctrine = $this->configData['doctrine'];

            $driver = isset($doctrine['driver']) ? $doctrine['driver'] : "";
            $host = isset($doctrine['host']) ? $doctrine['host'] : "";
            $dbname = isset($doctrine['dbname']) ? $doctrine['dbname'] : "";
            $username = isset($doctrine['user']) ? $doctrine['user'] : "";
            $password = isset($doctrine['password']) ? $doctrine['password'] : "";

            if ($driver != "" && $host != "" && $username != "") {
                return new Config\Doctrine($driver, $host, $dbname, $username, $password);
            }
        }

        throw new \Exception("No correct doctrine config found, check your config file");
    }
}
