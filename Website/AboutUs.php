<?php
// Starting the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="PlatformsStyles.css">
    <style>
        /* Set the background color, text alignment, and font styles for the body */
        body {
            background-color: rgba(233, 255, 255, 0.664);
            text-align: center;
            color: white;
            font-size: 18px;
            font-family: 'Raleway';
            position: relative;
            background-image: url('blueabstract.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Style for the background video that will play */
        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            background-size: cover;
        }

        /* Style for the main heading */
        h1 {
            font-size: 48px;
            margin-top: 75px;
        }

        /* Style for secondary headings */
        h2 {
            font-size: xx-large;
            justify-self: center;
        }

        /* Style for smaller headings */
        h4 {
            padding-bottom: -15px;
        }

        /* Style for the paragraphs */
        p {
            margin-top: -20px;
            font-size: medium;
        }

        /* Style for the top right profile button */
        .top-right-button {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            border: 2px solid blue;
            border-radius: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Style for the profile image inside the button */
        .top-right-button img {
            height: 53px;
            width: auto;
            border-radius: 50%;
        }

        /* a hover effect for the profile button */
        .top-right-button:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Style for the nav bar */
        nav {
            width: 100%;
            background-color: rgba(6, 14, 86, 0.8);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Style for the nav bar list */
        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        /* Style for each nav item */
        .navbar li {
            float: left;
        }

        /* Style for nav links */
        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Hover effect for nav links */
        .navbar li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Style for the container holding the sections */
        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
        }

        /* Style for the background sections */
        .background {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        /* Style for the reviews section */
        .reviews {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
        }
    </style>
</head>

<body>

    <!-- Background video -->
    <video autoplay muted loop>
        <source src="Images/blueabstract.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Top-right profile button -->
    <button class="top-right-button" onclick="openMenu()">
        <img src="images/Profile.png" alt="Person Icon">
    </button>

    <!-- side menu -->
    <?php include 'sideMenu.php'; ?>

    <!-- Nav bar -->
    <nav>
        <ul class="navbar">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="PlayStation.php">PlayStation</a></li>
            <li><a href="Steam.php">Steam</a></li>
            <li><a href="Xbox.php">Xbox</a></li>
            <li><a href="Nintendo.php">Nintendo</a></li>
        </ul>
    </nav>

    <!-- Main heading -->
    <h1>About Us</h1>

    <!-- Container for the sections -->
    <div class="container">
        <!-- Section: Why Us -->
        <div class="background">
            <h2>Why Us</h2>
            <h4><strong>Who are we?</strong></h4>
            <p>We're a team of passionate gamers and web designers who came together to create the best online store for video game enthusiasts. Our goal is to provide a seamless shopping experience while sharing our love for gaming with the community.</p>
            <h4><strong>What do we offer?</strong></h4>
            <ul>
                <li>Wide selection of games for PlayStation, Xbox, Nintendo, and PC</li>
                <li>Competitive prices and special deals</li>
                <li>Instant digital downloads</li>
                <li>Fast and reliable shipping for physical copies</li>
                <li>Secure payment options</li>
                <li>Regular updates and new releases</li>
                <li>24/7 responsive customer support</li>
            </ul>
        </div>

        <!-- Section: Meet the Team -->
        <div class="background">
            <h2>Meet the Team</h2>
            <h4><strong>Members</strong></h4>
            <ul>
                <li>Seif Ilyas - Lead Developer and project overseer</li>
                <li>Ali Ali & Ali Kazmi - Developers and game experts</li>
                <li>Zahra & Naema - Developers and Database systems management</li>
                <li>Fayzaan Ali - Developer, customer support and social media management</li>
                <li>Ishaq & Jazib - Developers and Website administrations</li>
            </ul>
        </div>

        <!-- Section: Customer Reviews -->
        <div class="reviews">
            <h2>Customer Reviews</h2>
            <div class="review">
                <div class="stars">★★★★★</div>
                <br>
                <p><strong>Michael Jordan:</strong> "HexGames has the best customer service! They responded to my inquiry within an hour and resolved my issue quickly."</p>
            </div>
        
            <div class="review">
                <div class="stars">★★★★★</div>
                <br>
                <p><strong>Cristiano Ronaldo:</strong> "I love shopping at HexGames. The website is easy to navigate, and the delivery is always on time."</p>
            </div>
            <div class="review">
                <div class="stars">★★★★★</div>
                <br>
                <p><strong>Lionel Pessi:</strong> "Great selection of games and excellent prices. I highly recommend HexGames to all gamers."</p>
            </div>
        </div>
    </div>

</body>

<!-- Footer -->
<footer id="footer">
    <p>&copy; 2025 Hex Games. All Rights Reserved.</p>
    <p>
        <a href="TermsOfService.php">Terms of Service</a> |
        <a href="PrivacyPolicy.php">Privacy Policy</a> |
        <a href="ContactUs.php">Contact Us</a> |
        <a href="AboutUs.php">About Us</a>
    </p>
</footer>

<script>
    // open the side menu
    function openMenu() {
        document.getElementById("sideMenu").style.width = "250px";
    }

    // close the side menu
    function closeMenu() {
        document.getElementById("sideMenu").style.width = "0";
    }
</script>

</html>