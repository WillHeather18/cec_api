<?php
include "../connection.php";

$id = $_POST['id']; // Unique ID to update a row
$type = $_POST['type'];
$distance = $_POST['distance'];
$date = $_POST['date'];

$query = "UPDATE journeys SET journey_type = '$type', distance_travelled = '$distance', journey_date = '$date' WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if($result)
{  
    echo json_encode(array(
        "success" => true
    ));
}
else
{
    echo json_encode(array("success" => false));
}

// Close the database connection
mysqli_close($conn);
?>