<?php
function searchCityTime($city_name)
{
require("config/cities.php");
foreach ($cities as $city) {
    if ($city["name"]===$city_name){
      $date_time = new DateTime("",new DateTimeZone($city["time_zone"]));
      $time = $date_time->format("H:i");
      $city["time"] = $time;

      return $city;
    }
}

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>