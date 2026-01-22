<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nintendo</title>
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

    <h1>Nintendo Games</h1>
    <table border="0">
        <tr>
            <td><a href="SuperSmashBrosUltimate.html"><img src="images/SuperSmashBrosUltimate.jpg" width="400" height="225" class="table-img"></a></td>
            <td><a href="Minecraft.html"><img src="Images/minecraft.jpeg" width="400" height="225" class="table-img"></a></td>
            <td><a href="Zelda.html"><img src="Images/TheLegendOFZelda.jpeg" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="SuperSmashBrosUltimate.html">Super Smash Bros Ultimate</a></td>
            <td class="game-name"><a href="Minecraft.html">Minecraft</a></td>
            <td class="game-name"><a href="Zelda.html">The Legend of Zelda: Echoes of Wisdom</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £19.99</td>
            <td class="game-info">Price: £69.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('Super Smash Bros Ultimate', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Minecraft', 19.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('The Legend of Zelda: Echoes of Wisdom', 69.99)">Add to Basket</button></td>
        </tr>
        <tr>
            <td><a href="PokemonLegends.html"><img src="Images/PokemonLegends.jpg" width="400" height="225" class="table-img"></a></td>
            <td><a href="AnimalCrossing.html"><img src="Images/AnimalCrossing.jpeg" width="400" height="225" class="table-img"></a></td>
            <td><a href="Kirby.html"><img src="Images/Kirby.jpeg" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="PokemonLegends.html">Pokemon Legends: Arceus</a></td>
            <td class="game-name"><a href="AnimalCrossing.html">Animal Crossing: New Horizon</a></td>
            <td class="game-name"><a href="Kirby.html">Kirby</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £49.99</td>
            <td class="game-info">Price: £49.99</td>
            <td class="game-info">Price: £59.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('Pokemon Legends: Arceus', 49.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Animal Crossing: New Horizon', 49.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Kirby', 59.99)">Add to Basket</button></td>
        </tr>
        <tr>
            <td><a href="EASportsFC25.html"><img src="Images/EASportsFC25.jpeg" width="400" height="225" class="table-img"></a></td>
            <td><a href="HogwartsLegacy.html"><img src="Images/HogwartsLegacy.webp" width="400" height="225" class="table-img"></a></td>
            <td><a href="BlackOps6.html"><img src="Images/Black Ops 6.avif" width="400" height="225" class="table-img"></a></td>
        </tr>
        <tr>
            <td class="game-name"><a href="EASportsFC25.html">EA Sports FC25</a></td>
            <td class="game-name"><a href="HogwartsLegacy.html">Hogwarts Legacy</a></td>
            <td class="game-name"><a href="BlackOps6.html">Call Of Duty: Black Ops 6</a></td>
        </tr>
        <tr>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £59.99</td>
            <td class="game-info">Price: £69.99</td>
        </tr>
        <tr>
            <td><button class="add-to-basket" onclick="addToBasket('EA Sports FC25', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Hogwarts Legacy', 59.99)">Add to Basket</button></td>
            <td><button class="add-to-basket" onclick="addToBasket('Call Of Duty: Black Ops 6', 69.99)">Add to Basket</button></td>
        </tr>
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
    // Get the existing basket from Local Storage or initialize an empty array
    let basket = JSON.parse(localStorage.getItem('basket')) || [];

    // Check if the item already exists in the basket
    const existingItem = basket.find(item => item.name === gameName);
    if (existingItem) {
        // If the item exists, increase its quantity
        existingItem.quantity += 1;
    } else {
        // If the item doesn't exist, add it to the basket
        basket.push({ name: gameName, price: price, image: 'Images/TheLegendOFZelda.jpeg', quantity: 1 });
    }

    // Save the updated basket back to Local Storage
    localStorage.setItem('basket', JSON.stringify(basket));

    alert(gameName + " has been added to your basket.");
}
    </script>
</body>

</html>