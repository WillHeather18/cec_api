<?php
include "../connection.php";

$journeyType = $_POST['vehicleType'];
$journeyDistance = $_POST['distance'];
$journeyDate = $_POST['selectedDate'];

// Assuming you have a table named 'users' with columns 'username' and 'password'
$query = "INSERT INTO journeys (journey_type, distance_travelled, journey_date) VALUES ('$journeyType', '$journeyDistance', '$journeyDate')";
$result = mysqli_query($conn, $query);

if($result)
{  
    echo json_encode(array("success" =>true));
}
else
{
    echo json_encode(array("success" =>false));
}

// Close the database connection
mysqli_close($conn);
?>
