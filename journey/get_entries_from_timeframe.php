<?php
include "../connection.php";

$timeframe = $_POST['timeframe'];

$currentDate = date('Y-m-d'); // Get the current date

switch($timeframe) {
    case 'week':
        $query = "SELECT * FROM journeys WHERE journey_date >= DATE_SUB('$currentDate', INTERVAL 1 WEEK)";
        break;
    case 'month':
        $query = "SELECT * FROM journeys WHERE journey_date >= DATE_SUB('$currentDate', INTERVAL 1 MONTH)";
        break;
    case 'year':
        $query = "SELECT * FROM journeys WHERE journey_date >= DATE_SUB('$currentDate', INTERVAL 1 YEAR)";
        break;
    case 'all time':
        $query = "SELECT * FROM journeys";
        break;
    default:
        echo json_encode(array("success" => false, "message" => "Invalid timeframe"));
        exit();
}

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {  
    $journeys = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(array(
        "success" => true,
        "journeys" => $journeys
    ));
} else {
    echo json_encode(array("success" => false));
}

// Close the database connection
mysqli_close($conn);
?>