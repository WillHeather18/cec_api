<?php
include "../connection.php";

$query = "SELECT * FROM journeys";
$result = mysqli_query($conn, $query);

if($result)
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