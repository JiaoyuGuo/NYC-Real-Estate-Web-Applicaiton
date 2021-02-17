<?php

require 'config1.php';

$query = "select *
        from properties t 
        join property_types p 
        on t.property_type_id = p.property_type_id
        join locations l
        on l.property_id = t.property_id 
        where property_type = 'Apartment'";

$result = $link->query($query);

$num_results = $result->num_rows;

echo"<table border='1' width = '100%' style='font-size:20px'>
        <tr>
            <th>Property_ID</th>
            <th>Property_Sqft</th>
            <th>Year_Built</th>
            <th>Bedroom_Number</th>
            <th>Property_Type</th>
            <th>Sale_Price</th>
            <th>Location</th>
        </tr>";

echo "<p align='center' style='font-size:20px'><strong> Number of Apartment Found: " . $num_results . "</strong></p>";
for ($i = 0; $i < $num_results; $i++) {
    $row = $result->fetch_assoc();
    echo"<tr>";
    echo"<td align='center' style='font-size:20px'>".htmlspecialchars(stripslashes($row['Property_ID']))."</td>";
    echo"<td align='center' style='font-size:20px'>".stripslashes($row['Property_Sqft'])."</td>";
    echo"<td align='center' style='font-size:20px'>".stripslashes($row['Year_Built'])."</td>";
    echo"<td align='center' style='font-size:20px'>".stripslashes($row['Bedroom_Number'])."</td>";
    echo"<td align='center' style='font-size:20px'>".stripslashes($row['Property_Type'])."</td>";
    echo"<td align='center' style='font-size:20px'>".stripslashes($row['Sale_Price'])."</td>";
    echo"<td align='center' style='font-size:20px'>".$row['Address']." ".$row['City'].", ".$row['State'].
        " ".$row['Postal_Code']."</td>";
    echo "</tr>";
       }
echo "</table>";


$result->free();
$link->close();

?>
