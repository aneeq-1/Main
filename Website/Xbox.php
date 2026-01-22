<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Xbox</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap" rel="stylesheet">
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

        table {
            width: 100%;
            text-align: center;
        }

        .table-img {
            border-radius: 10px;
        }

        .game-name a {
            color: white;
            text-decoration: none;
        }

        .game-name a:hover {
            text-decoration: underline;
        }

        .add-to-basket {
            background-color: rgba(9, 10, 63, 0.9);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .add-to-basket:hover {
            background-color: rgba(6, 14, 86, 0.9);
        }
    </style>
</head>

<body>
    <video autoplay muted loop>
        <source src="Images/blueabstract.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <button class="top-right-button" onclick="openMenu()">
        <img src="Images/Profile.png" alt="Person Icon">
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

    <h1>Xbox Games</h1>
    <table border="0">
        <tr>
            <td><a href="Minecraft.html"><img src="Images/minecraft.jpeg" alt="Minecraft" width="400" height="225" class="table-img"></a></td>
            <td><a href="EldenRing.html"><img src="Images/EldenRing.jpeg" alt="EldenRing" width="400" height="225" class="table-img"></a></td>
            <td><a href="Rust.html"><img src="Images/Rust.webp" alt="Rust" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="Minecraft.html">Minecraft</a></td>
            <td class="game-name"><a href="EldenRing.html">Elden Ring</a></td>
            <td class="game-name"><a href="Rust.html">Rust</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £19.99</td>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £49.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('Minecraft', 19.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Elden Ring', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Rust', 49.99)">Add to Basket</button></td>
        </tr>

        <tr>
            <td><a href="BlackOps6.html"><img src="Images/Black Ops 6.avif" alt="BlackOps6" width="400" height="225" class="table-img"></a></td>
            <td><a href="HogwartsLegacy.html"><img src="Images/HogwartsLegacy.webp" alt="HogwartsLegacy" width="400" height="225" class="table-img"></a></td>
            <td><a href="EASportsFC25.html"><img src="Images/EASportsFC25.jpeg" alt="EASportsFC25" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="BlackOps6.html">Call of Duty: Black Ops 6</a></td>
            <td class="game-name"><a href="HogwartsLegacy.html">Hogwarts Legacy</a></td>
            <td class="game-name"><a href="EASportsFC25.html">EA Sports FC25</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £69.99</td>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £59.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('Call of Duty: Black Ops 6', 69.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Hogwarts Legacy', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('EA Sports FC25', 59.99)">Add to Basket</button></td>
        </tr>
        <tr>
            <td><a href="ForzaHorizon5.html"><img src="Images/ForzaHorizon5.webp" alt="ForzaHorizon5" width="400" height="225" class="table-img"></a></td>
            <td><a href="SeaOfThieves.html"><img src="Images/SeaOfThieves.jpg" alt="SeaOfThieves" width="400" height="225" class="table-img"></a></td>
            <td><a href="DoomEternal.html"><img src="Images/DoomEternal.jpg" alt="DoomEternal" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="ForzaHorizon5.html">Forza Horizon 5</a></td>
            <td class="game-name"><a href="SeaOfThieves.html">Sea of Thieves</a></td>
            <td class="game-name"><a href="DoomEternal.html">Doom Eternal</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £39.99</td>
            <td class="game-info">Price: £39.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('Forza Horizon 5', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Sea of Thieves', 39.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Doom Eternal', 39.99)">Add to Basket</button></td>
        </tr>
        <!-- Add more rows as needed -->
    </table>

    <script>
        function openMenu() {
            document.getElementById("sideMenu").style.width = "250px";
        }

        function closeMenu() {
            document.getElementById("sideMenu").style.width = "0";
        }

        let basket = [];

        function addToBasket(gameName, price) {
            basket.push({ name: gameName, price: price });
            alert(gameName + " has been added to your basket.");
            console.log(basket); // For debugging purposes
        }
    </script>
</body>

</html>