<?php
include "../connection.php";

$userUsername = $_POST['username'];
$userPassword = $_POST['password'];

// Assuming you have a table named 'users' with columns 'username' and 'password'
$query = "SELECT * FROM users WHERE username = '$userUsername' AND password = '$userPassword'";
$result = mysqli_query($conn, $query);

if($result->num_rows > 0)
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
