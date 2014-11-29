<?php

namespace TE923ToMysql\Lib;

class TE923Tool
{
    private $debug;
    private $mock;
    private $te923tool;
    
    /**
     * Init class
     * @param boolean $debug
     * @param boolean $mock
     */
    public function init($te923tool, $debug, $mock)
    {   
        $this->te923tool    = $te923tool;
        $this->debug        = ($debug === true)? true : false;
        $this->mock         =  ($mock  === true)? true : false;
    }
    
    /**
     * Get RAW current weather data from tool
     * @return string
     */
    private function getWeatherData()
    {
        if ($this->mock) {
            return time().':21.90:50:14.00:81:20.60:53:13.90:74:i:i:20.10:60:1009.9:i:5:0:i:i:i:i:3412';
        } else {
            //Get data from te923Tool
    
    
        }
    
    }
    
    /**
     * Get RAW Stored data from tool
     * @return array:string
     */
    private function getStoredWeatherData()
    {
        if ($this->mock) {
            return array(
                '1400822040:21.85:53:13.70:80:20.70:54:13.60:70:i:i:20.40:58:1006.4:i:5:0:i:i:i:i:3411',
                '1400825640:22.00:53:14.40:78:20.80:55:14.40:70:i:i:20.30:59:1007.1:i:5:0:i:i:i:i:3411',
                '1400829240:22.30:52:15.30:75:20.90:55:15.40:64:i:i:20.40:60:1007.1:i:5:0:i:i:i:i:3411',
                '1400832840:22.20:51:17.80:66:20.90:55:18.30:56:i:i:20.50:59:1007.7:i:5:0:i:i:i:i:3411',
                '1400836440:22.15:49:19.10:61:20.90:53:18.90:51:i:i:20.60:58:1008.4:i:5:0:i:i:i:i:3411',
                '1400840040:22.55:49:19.90:57:21.40:55:20.30:45:i:i:20.90:59:1008.2:i:5:0:i:i:i:i:3411',
                '1400843640:23.05:48:20.70:55:22.20:53:21.70:44:i:i:21.20:56:1007.3:i:5:0:i:i:i:i:3411',
                '1400847240:23.75:46:21.30:52:23.30:49:22.80:38:i:i:21.60:54:1006.6:i:5:0:i:i:i:i:3411',
                '1400850840:24.25:44:21.90:49:23.50:47:23.00:37:i:i:22.00:53:1005.9:i:5:0:i:i:i:i:3411',
                '1400854440:24.70:44:22.20:49:24.10:47:24.20:36:i:i:22.40:55:1004.8:i:5:0:i:i:i:i:3411',
                '1400858040:24.80:43:21.00:51:24.10:46:21.70:41:i:i:22.50:54:1004.3:i:5:0:i:i:i:i:3411',
                '1400861640:24.20:43:19.40:56:23.20:46:19.30:45:i:i:22.30:55:1005.7:i:5:0:i:i:i:i:3411',
                '1400865240:23.70:46:16.70:73:22.90:49:17.60:58:i:i:22.00:56:1006.2:i:5:0:i:i:i:i:3412',
                '1400868840:23.60:47:16.30:75:22.60:49:17.70:59:i:i:22.30:59:1006.9:i:5:0:i:i:i:i:3412',
                '1400872440:23.40:48:16.10:76:22.30:51:17.20:59:i:i:22.40:58:1007.1:i:5:0:i:i:i:i:3412',
                '1400876040:23.25:49:16.00:77:22.10:51:17.00:60:i:i:22.10:58:1009.6:i:5:0:i:i:i:i:3412',
                '1400879640:23.20:50:15.70:78:21.80:52:16.40:61:i:i:21.70:58:1009.6:i:5:0:i:i:i:i:3412',
                '1400883240:23.10:50:15.30:78:21.70:52:16.00:61:i:i:21.50:58:1009.6:i:5:0:i:i:i:i:3412',
                '1400886840:23.00:50:15.30:78:21.50:52:15.70:63:i:i:21.20:58:1008.8:i:5:0:i:i:i:i:3412',
                '1400890440:23.00:50:15.10:79:21.50:52:15.50:64:i:i:21.00:58:1008.6:i:5:0:i:i:i:i:3412',
                '1400894040:22.95:50:14.90:80:21.40:53:15.40:66:i:i:20.80:58:1008.2:i:5:0:i:i:i:i:3412',
                '1400897640:22.85:50:14.80:81:21.30:53:15.30:67:i:i:20.70:58:1008.2:i:5:0:i:i:i:i:3412',
                '1400901240:22.75:50:14.90:81:21.20:53:15.00:69:i:i:20.40:59:1008.7:i:5:0:i:i:i:i:3412',
                '1400904840:22.60:50:14.40:81:21.10:53:14.60:69:i:i:20.30:59:1008.8:i:5:0:i:i:i:i:3412',
                '1400908440:22.40:51:14.30:83:20.90:53:14.30:77:i:i:20.20:59:1009.0:i:5:0:i:i:i:i:3412',
                '1400912040:22.15:51:14.10:82:20.70:53:14.10:75:i:i:20.10:59:1010.1:i:5:0:i:i:i:i:3412',
                '1400915640:21.90:50:14.00:81:20.60:53:13.90:74:i:i:20.10:60:1009.9:i:5:0:i:i:i:i:3412',
            );
        } else {
            //Get data from te923Tool
    
        }
    }
    
}