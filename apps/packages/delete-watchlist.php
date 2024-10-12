<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "druk_travel";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the watchlist_id is passed
if (isset($_POST['watchlist_id'])) {
    $watchlist_id = $_POST['watchlist_id'];

    // Prepare and execute delete query
    $sql = "DELETE FROM watchlist WHERE id = $watchlist_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Item deleted successfully!'); window.location.href='watchlist.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
