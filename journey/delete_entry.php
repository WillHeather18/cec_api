<?php
include "../connection.php";

$id = $_POST['id']; // Unique ID to delete a row

$query = "DELETE FROM journeys WHERE id = '$id'";
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
