<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    
    <?php

        $city_name = "kaunas";
        $api_url='https://api.meteo.lt/v1/places/'.$city_name.'/forecasts/long-term';
        $wheather_data = json_decode( file_get_contents($api_url), true);
        $weather_forcast_day_1 = $wheather_data['forecastTimestamps']['0']['conditionCode'];
        $weather_forcast_day_2 = $wheather_data['forecastTimestamps']['24']['conditionCode'];
        $weather_forcast_day_3 = $wheather_data['forecastTimestamps']['48']['conditionCode'];
        echo"<pre>";
        print_r($weather_forcast_day_1);
        print_r($weather_forcast_day_2);
        print_r($weather_forcast_day_3);
        print_r($weather_forcast_data);
    
    ?>
   
</body>

</html>