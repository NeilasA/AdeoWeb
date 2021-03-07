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
        $wheather_data = file_get_contents($api_url);
        echo"<pre>";
        print_r($wheather_data);
    
    ?>
   
</body>

</html>