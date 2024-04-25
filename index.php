<?php include "weather.php"?>

<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>
    <div>
        <div class="row heading mt-3 mb-4">
            <div class="col-md-12">
            <h1 class="mt-3">weather&nbsp;app</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                <input type="text" name="city" id="" class="inputsearch" placeholder="Enter city name....." ><br>
                <input type="submit" value="submit" name="submit" class="button1search">
                </form>
                <br>
                <div class="output">
                    <h3>CITY : <?php echo $city?></h3>
                    <ol >
                        <li>
                            TEMPERATURE : <?php echo $temp?>
                        </li>
                        <li>
                            CELCIUS : <?php echo $celcius?>
                        </li>
                        <li>
                            WEATHER : <?php echo $weath?>
                        </li>
                        <li>
                            LATTITUDE : <?php echo $lattitude?>
                        </li>
                        <li>
                            LONGITUDE : <?php echo $longitude?>
                        </li>
                        <li>
                            WIND SPEED : <?php echo $windspeed?>
                        </li>
                        <li>
                            HUMIDITY : <?php echo $humidity?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>
</html>