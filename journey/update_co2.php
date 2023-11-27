<?php
include "../connection.php";

$id = $_POST['id']; // Unique ID to update a row
$co2 = $_POST['co2'];

$query = "UPDATE journeys SET co2 = '$co2' WHERE id = '$id'";
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