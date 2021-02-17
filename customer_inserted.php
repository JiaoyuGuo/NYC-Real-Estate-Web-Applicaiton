<head>
    <title>Potential Client to Reach Out</title>
</head>
<?php

// Include config file
require_once "config1.php";

//@ $link = new mysqli('localhost', 'root', '', 'HW2');
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$query = "select * from contact_us";
$result = $link->query($query);


$num_results = $result->num_rows;
echo "<p>Number of Potential Clients: ".$num_results."</p>";
for ($i=0; $i <$num_results; $i++) {
    $row = $result->fetch_assoc();
    echo "<p><strong>".($i+1).". Customer_ID: ";
    echo htmlspecialchars(stripslashes($row['id']));
    echo "</strong><br />First_Name: ";
    echo stripslashes($row['first_name']);
    echo "<br />Last_Name: ";
    echo stripslashes($row['last_name']);
    echo "<br />Email: ";
    echo stripslashes($row['email']);
    echo "<br />Phone: ";
    echo stripslashes($row['phone']);
    echo "<br />Message: ";
    echo stripslashes($row['message']);
    echo "<br />Contact datetime: ";
    echo stripslashes($row['datetime']);
    echo "<br />Case Status: ";
    echo stripslashes($row['status']);
    echo "</p>";
}
$result->free();
$link->close();

?>









