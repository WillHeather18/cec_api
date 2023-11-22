<?php
include "../connection.php";

$journeyDate = $_POST['selectedDate'];
$journeyMonth = date('m', strtotime($journeyDate)); // Extract the month from the selected date

$query = "SELECT * FROM journeys WHERE MONTH(journey_date) = '$journeyMonth'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{  
    $journeys = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(array(
        "success" =>true,
        "journeys" => $journeys
    ));
}
else
{
    echo json_encode(array("success" =>false));
}

// Close the database connection
mysqli_close($conn);
?>
