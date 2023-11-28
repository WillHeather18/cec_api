<?php
include "../connection.php";

$userUsername = $_POST['username'];
$userPassword = $_POST['password'];

$checkQuery = "SELECT * FROM users WHERE username = '$userUsername'";
$checkResult = mysqli_query($conn, $checkQuery);

if($checkResult->num_rows > 0)
{
    // Username already exists
    echo json_encode(array("success" => false, "message" => "Username already exists"));
    exit();
}
else
{
    $query = "INSERT INTO users (username, password) VALUES ('$userUsername', '$userPassword')";
    $result = mysqli_query($conn, $query);

    if($result)
    {  
        echo json_encode(array("success" =>true, "message" => "User created"));
    }
    else
    {
        echo json_encode(array("success" =>false, "message" => "User not created"));
    }
}

// Close the database connection
mysqli_close($conn);
?>
