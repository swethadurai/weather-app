<?php
  if(isset($_POST["submit"])){
    if(empty($_POST["city"])){
        echo "enter city name ";
    }
    else{
        $city=$_POST["city"];
        $api_key="835c0e60d147dcdeec935c55cf840eb8";
        $api="https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
        $data=file_get_contents($api);
       

        $weather=json_decode($data,true);

       $temp=$weather["main"]["temp"];
       $celcius=$temp-273;
       $weath=$weather["weather"][0]["description"];
       $lattitude=$weather["coord"]["lat"];
       $longitude=$weather["coord"]["lon"];
       $humidity=$weather["main"]["humidity"];
       $windspeed=$weather["wind"]["speed"];
       
    }
  }
?>