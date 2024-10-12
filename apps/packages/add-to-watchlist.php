<?php
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "druk_travel";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo json_encode(["success" => false, "message" => "Connection failed: " . mysqli_connect_error()]);
    exit;
}

// Get the JSON data from the request
$data = json_decode(file_get_contents("php://input"));

// Check if the item already exists in the watchlist
$stmt = $conn->prepare("SELECT COUNT(*) FROM watchlist WHERE title = ?");
$stmt->bind_param("s", $data->title);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close(); // Close the statement

if ($count > 0) {
    // Item already exists
    echo json_encode(["success" => false, "message" => "Item already in watchlist."]);
} else {
    // Prepare and bind for insert
    $stmt = $conn->prepare("INSERT INTO watchlist (title, image) VALUES (?, ?)");
    $stmt->bind_param("ss", $data->title, $data->image);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Item added to watchlist."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error adding to watchlist: " . $stmt->error]);
    }
    $stmt->close(); // Close the statement after insert
}
$conn->close();
?>
