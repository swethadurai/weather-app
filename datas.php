<?php
require "dbconnection.php";
include "head.php";
?>
<table border="1" style ="margin-left:20%;margin-bottom:50px">
    <tr>
        <td>id</td>
        <td>city</td>
        <td>temperature</td>
        <td>weather</td>
        <td>lattitude</td>
        <td>longitude</td>
        <td>wind speed</td>
        <td>humidity	</td>
    </tr>

<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM data");
foreach ($rows as $row) :
?>
<tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["temperature"]; ?></td>
    <td><?php echo $row["weather"]; ?></td>
    <td><?php echo $row["lattitude"]; ?></td>
    <td><?php echo $row["longitude"]; ?></td>
    <td><?php echo $row["wind speed"]; ?></td>
    <td><?php echo $row["humidity"]; ?></td>
</tr>
<?php endforeach;?>
</table>