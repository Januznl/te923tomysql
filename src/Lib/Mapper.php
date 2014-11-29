<?php

namespace TE923ToMysql\Lib;

class Mapper
{
    
    /**
     * Maps the weather data into an human readable array
     * @param string $data
     * @return array  
     */
    public function mapWeatherDataToRecord($data)
    {
        $data = explode(":",$data);
        
        //Convert the Forecast to something readable
        $forecast = "unknown";
        switch ($data[15]){
            case 0:
                $forecast = "heavy_snow";
                break;
            case 1:
                $forecast = "little_snow";
                break;
            case 2:
                $forecast = "heavy_rain";
                break;
            case 3:
                $forecast = "little_rain";
                break;
            case 4:
                $forecast = "cloudy";
                break;
            case 5:
                $forecast = "some_clouds";
                break;
            case 6:
                $forecast = "sunny";
                break;
        }
        
        //Convert the returned data into something readable
        return array(
            'timestamp'         => $data[0],  // Time of measurement
            'tempInternal'      => $data[1],  // temperature from internal sensor in Celsius
            'humInternal'       => $data[2],  // humidity from internal sensor in % rel
            'tempChannel1'      => $data[3],  // temperature from external channel 1 in Celsius
            'tempChannel2'      => $data[4],  // temperature from external channel 2 in Celsius
            'tempChannel3'      => $data[5],  // temperature from external channel 3 in Celsius
            'tempChannel4'      => $data[6],  // temperature from external channel 4 in Celsius
            'tempChannel5'      => $data[7],  // temperature from external channel 5 in Celsius
            'humChannel1'       => $data[8],  // humidity from external channel 1 in % rel
            'humChannel2'       => $data[9],  // humidity from external channel 2 in % rel
            'humChannel3'       => $data[10], // humidity from external channel 3 in % rel
            'humChannel4'       => $data[11], // humidity from external channel 4 in % rel
            'humChannel5'       => $data[12], // humidity from external channel 5 in % rel
            'airpressure'       => $data[13], // in mbar
            'uv'                => $data[14], // UV index
            'forecast'          => $forecast, // see switch
            'stormwarning'      => $data[16], // stormwarning; 0 - no warning, 1 - fix your dog
            'windDirection'     => $data[17], // wind direction in n x 22.5�; 0 -> north
            'windSpeed'         => $data[18], // wind speed in m/s
            'windGust'          => $data[19], // wind gust speed in m/s
            'windChill'         => $data[20], // windchill temperature in Celsius
            'rain'              => $data[21], // rain counter (maybe since station starts measurement) as value
        );
        
    }

    /**
     * Maps the status data into an human readable array
     * @param string $data
     * @return array  
     */
    public function mapStatusDataToRecord($data)
    {
        $data = explode(":",$data);
        
        
        //Convert the returned data into something readable
        return array(
            'firmwareVersionSystem'     => $data[0],  // software version of system controller
            'firmwareVersionBarometer'  => $data[1],  // software version of barometer
            'firmwareVersionUV'         => $data[2],  // software version of UV and channel controller
            'firmwareVersionRain'       => $data[3],  // software version of rain controller
            'firmwareVersionWind'       => $data[4],  // software version of wind controller
            'battStatusRain'            => $data[5],  // battery of rain sensor (1-good (not present), 0-low)
            'battStatusUV'              => $data[6],  // battery of UV sensor (1-good (not present), 0-low)
            'battStatusWind'            => $data[7],  // battery of wind sensor (1-good (not present), 0-low) 
            'battStatusSensor1'         => $data[12],  // battery of sensor 1 (1-good (not present), 0-low)
            'battStatusSensor2'         => $data[11],  // battery of sensor 2 (1-good (not present), 0-low)
            'battStatusSensor3'         => $data[10],  // battery of sensor 3 (1-good (not present), 0-low)
            'battStatusSensor4'         => $data[9],  // battery of sensor 4 (1-good (not present), 0-low)
            'battStatusSensor5'         => $data[8],  // battery of sensor 5 (1-good (not present), 0-low)
        );
        
    }
}