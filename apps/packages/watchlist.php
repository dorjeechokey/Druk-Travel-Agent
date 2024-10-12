<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "druk_travel";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch watchlist items for the user (assuming a user_id is available)
$user_id = 1; // For now, we're assuming user_id is 1. You can replace it with the logged-in user's ID.

$sql = "SELECT * FROM watchlist";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choki Travel - Home</title>
    <link rel="stylesheet" href="../../stylesheet/styles.css">
    <link rel="stylesheet" href="../../stylesheet/sub-feature.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .watchlist-card {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 10px 20px 10px 20px;
            width: 18%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            padding: 24px;
            gap: 20px;
        }
    </style>
</head>

<body>
<header class="header-content">
        <img width="80px" class="logo" src="../../assets//logo.png" alt="Choki Dorji">
        <h1 class="logo">Druk Travel Agent</h1>
        <div class="search">
            <input type="text" placeholder="Search" class="search-input">
            <i class="search-icon fa fa-search"></i>
        </div>

        <div class="responsive-header">
            <img width="80px" src="../../assets//logo.png" alt="Choki Dorji">
            <h1>Druk Travel Agent</h1>
        </div>
    </header>
    <nav>
        <ul class="my-menu">
            <li><a href="../index.html">HOME</a></li>
            <li><a href="#"> ABOUT US </a>
                <ul>
                    <li><a href="../about-us/contact.html">CONTACT</a></li>
                    <li><a href="../about-us/faq.html">FAQ</a></li>
                </ul>
            </li>
            <li><a href="#"> BHUTAN </a>
                <ul>
                    <li><a href="../bhutan/geography.html"> GEOGRAPHY </a></li>
                    <li><a href="../bhutan/hotel.html"> HOTELS </a></li>
                    <li><a href="../bhutan/calendar.html">FESTIVAL CALENDAR</a></li>
                    <li><a href="../bhutan/flight.html"> FLIGHT </a></li>
                    <li><a href="../bhutan/visa.html"> VISA </a></li>
                </ul>
            </li>
            <li><a href="#"> PACKAGES </a>
                <ul>
                    <li><a href="culture.html"> CULTURAL </a></li>
                    <li><a href="festival.html"> FESTIVAL </a></li>
                    <li><a href="trekking.html"> TREKKING </a></li>
                </ul>
            </li>
            <li>
                <a href="../book-now/book-now.html"> BOOK NOW </a>
            </li>
            <li>
        <a href="watchlist.php"> MY WATCHLIST </a>
      </li>
        </ul>
    </nav>

    <h2 style="display: flex; justify-content: center; align-items: center; margin:18px 12px">Your Watchlist</h2>
    <div class="watchlist-container" style="display:flex;">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="watchlist-card">
                    <img src="' . $row["image"] . '" alt="' . $row["title"] . '" height="100%" width="100%">
                    <h3>' . $row["title"] . '</h3>
                    <form action="delete-watchlist.php" method="POST">
                        <input type="hidden" name="watchlist_id" value="' . $row["id"] . '">
                        <button type="submit" class="delete-button" style="background-color: rgb(229, 67, 30)">Delete</button>
                    </form>
                </div>';
            }
        } else {
            echo '<p>No items in your watchlist.</p>';
        }
        ?>
    </div>

    <footer>
    <p>&copy; 2024 Druk Travel</p>
        <p><i class="fa fa-phone"></i>Phone No: <span>+975 17 44 22 82</span></p>
        <p><i class="fa fa-google"></i>Email Address: <span>druktravelagent@yahoo.com</span></p>
        <div style="display: flex; gap: 10px; margin: 16px 0; font-size: 36px">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-whatsapp"></i>
            <i class="fa fa-twitter"></i>
        </div>
    </footer>
</body>
</html>
