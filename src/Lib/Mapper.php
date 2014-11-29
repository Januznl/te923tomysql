<?php

namespace TE923ToMysql\Lib;

class Mapper
{
    
    /**
     * Maps the data into an human readable array
     * @param string $data
     * @return array  
     */
    public function mapDataToRecord($data)
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
}