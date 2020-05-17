<?php
echo "<pre>";
print_r($_SERVER);
echo "<hr>";
print_r($_ENV);
echo "</pre>";
echo getenv('php-weather-api-key');
echo "<hr/>";
phpinfo();
#05ac784e926abb5f7952bd4cb9fb73bb
#api.openweathermap.org/data/2.5/weather?q=Marikina,Manila&units=metric&appid=05ac784e926abb5f7952bd4cb9fb73bb
?>