<?php

namespace TE923ToMysql\Lib\Config;

use Symfony\Component\Yaml\Yaml;

class Config
{

    private $configData;
    private $configPath;

    public function __construct(Yaml $configParser)
    {
        $this->configPath = 'config/config.yml';
        $this->load();
    }

    public function getType($path)
    {
        return $this->configData[$path];
    }

    /**
     * @param string $configPath
     */
    public function setConfigPath($configPath)
    {
        $this->configPath = $configPath;
        $this->load();
    }

    /**
     * Load config
     * @throws \Exception
     */
    private function load()
    {
        if (!file_exists($this->configPath)) {
            throw new \Exception("Config file (" . $this->configPath . ") does not exists...");
        }
        $this->configData = Yaml::parse($this->configPath);
    }


}
