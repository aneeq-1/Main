<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) { // Changed from 'username' to 'email'
    // Redirect to the login page if not logged in
    header("Location: Loginpage.php");
    exit();
}

// Get the user's email from the session
$email = $_SESSION['email'];

// OPTIONAL: Fetch the username from the database if needed
include 'db_connect.php';
$stmt = $conn->prepare("SELECT Username FROM Users WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        HEX Games
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="homepagestyles.css">
    <style>
        .side-menu {
            height: 65%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: rgba(9, 10, 63, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 200px;
        }
        .side-menu a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .side-menu a:hover {
            color: #f1f1f1;
        }
        .side-menu .close-btn {
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 36px;
        }
    </style>
</head>
<body>
    <video autoplay muted loop>
        <source src="Images/bluebackground.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <button class="top-right-button" onclick="openMenu()">
        <img src="Images/Profile.png" alt="Person Icon">
    </button>

    <!-- Include the reusable side menu -->
    <?php include 'sideMenu.php'; ?>

    <img src="Images/logo.png" height="250" width="250">
    <h1>-HEX-</h1> 
    <h2>GAMES</h2>
    <h4 style="font-size: 34px;">Welcome, <?php echo htmlspecialchars($username); ?>!</h4> <!-- Welcome message -->
    <h3>Select your platform!</h3> 

    <table style="width: 100%; text-align: center;">
        <tr>
            <td style="padding-left: 300px;"><a href="PlayStation.php" class="animated-button"><img src="Images/psbutton.png" width="150" height="150"></a></td>
            <td style="padding: 30px;"><a href="Steam.php" class="animated-button"><img src="Images/steambutton.png" width="150" height="150"></a></td>
            <td style="padding: 30px;"><a href="Xbox.php" class="animated-button"><img src="Images/xboxbutton.png" width="150" height="150"></a></td>
            <td style="padding-right: 300px;"><a href="Nintendo.php" class="animated-button"><img src="Images/nintendobutton.png" width="150" height="150"></a></td>
        </tr>
    </table>
    <script>
        function openMenu() {
            document.getElementById("sideMenu").style.width = "250px";
        }

        function closeMenu() {
            document.getElementById("sideMenu").style.width = "0";
        }
    </script>
</body>
</html>