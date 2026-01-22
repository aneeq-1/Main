<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="PlatformsStyles.css">

    <style>
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

        h1 {
            font-size: 48px;
            margin-top: 75px;
        }

        h2 {
            font-size: xx-large;
            justify-self: center;
        }

        h4 {
            padding-bottom: -15px;
        }

        p {
            margin-top: -20px;
            font-size: medium;
        }

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

        .top-right-button img {
            height: 53px;
            width: auto;
            border-radius: 50%;
        }

        .top-right-button:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        nav {
            width: 100%;
            background-color: rgba(6, 14, 86, 0.8);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
        }

        .background, .faq {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .faq p {
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form input,
        form textarea,
        form button {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        form button {
            background-color: #139dff;
            color: white;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #0055ff;
        }

        footer {
            background-color: rgba(6, 14, 86, 0.8);
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 10%;
            width: 100%;
            font-size: 12px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <video autoplay muted loop>
        <source src="Images/blueabstract.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <button class="top-right-button" onclick="openMenu()">
        <img src="images/Profile.png" alt="Person Icon">
    </button>

    <!-- Include the reusable side menu -->
    <?php include 'sideMenu.php'; ?>

    <!-- Navigation bar -->
    <nav>
        <ul class="navbar">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="PlayStation.php">PlayStation</a></li>
            <li><a href="Steam.php">Steam</a></li>
            <li><a href="Xbox.php">Xbox</a></li>
            <li><a href="Nintendo.php">Nintendo</a></li>
        </ul>
    </nav>

    <h1>Contact Us</h1>

    <div class="container">

        <div class="background">
            <h2>Get in touch</h2>
            <h4>Got a question?</h4>
            <p>You might find the answer in the FAQ page</p>
            <p>Otherwise, check out all the ways you can contact us below</p>
            
            <h4>Call Us</h4>
            <p>+44 7429119603</p>
            <p>Mon-Fri 9am-6pm</p>
            <p>Sat-Sun 10am-4pm</p>
            
            <h4>Email Us</h4>
            <p>Email: Inquiries@HexGames.co.uk</p>
            <p>We aim to respond within 24 hours</p>
            
            <h4>Write to Us</h4>
            <p>HexGames, 123 Great Horton Road, Bradford, BD7 1DP</p>
            <p>We aim to respond within 7 days</p>

            <h4>Social Media</h4>
            <p>Follow us on social media for the latest updates and news</p>
            <p>Twitter: @HexGames</p>
            <p>Instagram: @HexGames</p>
            <p>Facebook: HexGames</p>
        </div>

        <div class="faq">
            <h2>Frequently Asked Questions</h2>
            <h4><strong>Q: How can I track my order?</strong></h4>  
            <p>A: You can track your order by logging into your account and visiting the 'Order History' section.</p>
            <h4><strong>Q: What is your return policy?</strong></h4>
            <p>A: We offer a 30-day return policy for unopened items. Please visit our Return Policy page for more details.</p>
            <h4><strong>Q: How can I contact customer support?</strong></h4>
            <p>A: You can contact us via phone, email, or social media. Our contact details are listed above.</p>
            <h4><strong>Q: Do you offer international shipping?</strong></h4>
            <p>A: Yes, we offer international shipping. Shipping costs and delivery times vary depending on the destination.</p>
            <h4><strong>Q: How can I reset my password?</strong></h4>
            <p>A: You can reset your password by clicking on the 'Forgot Password' link on the login page.</p>
            <h4><strong>Q: Do you offer gift cards?</strong></h4>
            <p>A: Yes, we offer gift cards in various denominations. You can purchase gift cards on our website.</p>
        </div>

        <div class="background">
            <h2>Inquiries</h2>
            <form>
                <h4>Let us know how we can help</h4>
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

</body>

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
    function openMenu() {
        document.getElementById("sideMenu").style.width = "250px";
    }

    function closeMenu() {
        document.getElementById("sideMenu").style.width = "0";
    }
</script>

</html>