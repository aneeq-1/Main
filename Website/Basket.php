


<!DOCTYPE html>
<html>

<head>
    <title>Shopping Basket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="homepagestyles.css">
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

        .top-right-button :hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .top-left-logo {
            position: absolute;
            top: 10px;
            left: 10px;
            height: 100px;
            width: auto;
        }

        /* Navigation bar styles */
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

        .container {
            display: flex;
            justify-content: space-between;
            /* Push items to left and right */
            align-items: flex-start;
            align-content: center;
            width: 100%;
            max-width: 2160px;
            max-height: 3840px;
            margin: auto;
            gap: 20px;
        }


        .table-img {
            transition: transform 0.3s ease;
            /* image animation */
            border-radius: 7px;
            /* rounded corners */
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;

        }

        .items {
            width: 100%;
            max-width: 750px auto;
            margin: 0 auto;

        }

        .background {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(231, 231, 231, 0.753);
            border-radius: 10px;
            padding: 15px;
            max-width: 1350px;
            width: 100% auto;
            height: auto;
            flex-wrap: wrap;
        }


        .basket-item img {
            max-width: 90%;
            height: auto;
            border-radius: 23px;
        }

        .name {
            font-size: 23px;
            font-weight: bold;
            background-color: rgb(0, 30, 201);
            border-radius: 7px;
            padding: 3px;
            margin-top: 20px;
            max-width: 300px;
            width: 100%;

        }

        .remove-btn {
            cursor: pointer;
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease;

        }

        .total {
            font-size: 23px;
            font-weight: bold;
            border-radius: 7px;
            padding: 10px;
            background-color: rgb(0, 30, 201);
        }

        .quantity {
            border: black 2px;
            border-radius: 10px;
            height: 50px;
            width: 80%;
            text-align: center;
        }

        .quantity2 {
            border: black 2px;
            border-radius: 10px;
            height: 50px;
            width: 80%;
            text-align: center;
        }

        .Checkout-btn {
            background-color: rgb(0, 30, 201);
            border: #00000056 solid 1px;
            color: white;
            border-radius: 10px;
            padding: 10px;
            font-size: 18px;
            width: auto;
            height: auto;
            cursor: pointer;
        }

        .Checkout-btn:hover {
            background-color: darkblue;
        }

        .total-checkout {
            width: 90%;
            height: auto;
            max-width: 400px;
            margin: 0px auto;
            margin-left: 25px;


        }

        .checkout-background {
            background-color: rgba(231, 231, 231, 0.753);
            border-radius: 10px;
            width: fit-content;
            height: fit-content;
            padding: 35px;
            margin: 0px auto;
        }

        img:hover {
            transform: scale(1.1);
        }

        .suggested {
            width: 90%;
            height: auto;
            max-width: 400px;
            margin: 0px auto;
            margin-right: 25px;
            list-style: none;
        }

        .suggested-background {
            background-color: rgba(231, 231, 231, 0.753);
            border-radius: 10px;
            width: fit-content;
            height: fit-content;
            padding: 20px;
        }

        .suggested-item {
            width: 100%;
            max-width: 500px;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 7px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 4px;
            margin-top: 4px;
            ;

        }

        .newsletter {
            background-color: rgba(231, 231, 231, 0.753);
            border-radius: 10px;
            padding: 15px;
            width: 90%;
            height: auto;
            max-width: 400px;
            margin: 0px auto;


        }

        .newsletter-header {
            font-size: x-large;
        }

        .input-box input {
            width: 75%;
            height: 50px;
            max-width: 300px;
            justify-self: center;
            border: none;
            background: transparent;
            outline: none;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 40px;
            font-size: 16px;
            padding: 7px;
            color: white;

        }

        .input-box input::placeholder {
            color: white;
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
        .container {
    display: flex; /* Use flexbox to align items side by side */
    justify-content: space-between; /* Push items to the left and right */
    align-items: flex-start; /* Align items to the top */
    gap: 20px; /* Add space between the sections */
    padding: 20px;
    width: 100%; /* Ensure the container takes the full width */
    max-width: 1200px; /* Optional: Limit the maximum width of the container */
    margin: auto; /* Center the container horizontally */
}

.items {
    flex: 2; /* Take up more space for the basket items */
    max-width: 70%; /* Limit the width of the basket items section */
    margin: 0; /* Remove any conflicting margins */
}

.total-checkout {
    flex: 1; /* Take up less space for the checkout section */
    max-width: 30%; /* Limit the width of the checkout section */
    margin: 0; /* Remove conflicting margins */
}

.checkout-background {
    background-color: rgba(231, 231, 231, 0.753);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

        .basket-item-container {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.basket-item-image {
    flex: 0 0 auto; /* Fix the width of the image container */
}

.basket-img {
    width: 350px; /* Ensure the image scales properly */
    height: auto;
    border-radius: 10px;
}

.basket-item-details {
    flex: 1; /* Allow the details to take up the remaining space */
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.basket-item-details .name {
    font-size: 18px;
    font-weight: bold;
}

.basket-item-details .price {
    font-size: 16px;
    color: #FFFF;
}

.quantity-container {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Space out the quantity input and remove button */
    gap: 10px; /* Add spacing between elements */
}

.quantity {
    width: 60px;
    padding: 5px;
    font-size: 14px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.remove-btn {
    padding: 10px 20px; /* Add more padding for a rectangular shape */
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px; /* Keep the corners slightly rounded */
    cursor: pointer;
    font-size: 14px;
    width: auto; /* Allow the button to size dynamically based on content */
    height: auto; /* Remove fixed height to make it flexible */
}

.remove-btn:hover {
    background-color: darkred;
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
    <div id="sideMenu" class="side-menu">
        <a href="javascript:void(0)" class="close-btn" onclick="closeMenu()">&times;</a>
        <a href="Basket.php">Shopping Basket</a>
        <a href="Loginpage.php">Sign in</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="FAQ.php">FAQ</a>
    </div>

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

    <h1>Shopping Basket</h1>


    <div class="container">
    <!-- Basket Items Section -->
    <div class="items">
        <h2>Basket Items</h2>
        <div id="basket-items"></div>
    </div>

    <!-- Checkout Section -->
    <div class="total-checkout">
        <h2>Checkout</h2>
        <div class="checkout-background">
            <p class="total" id="total">Total: £0.00</p>
            <button class="Checkout-btn">Checkout</button>
            <div>
                    <h4>Delivery Guarantee</h4>
                    <p>🚚 £5.00 Credit for Delays</p>
                    <p>📦 Free Return if Item is Damaged</p>
                    <p>⏳ 15-Day No Update Refund</p>
                    <p>📭 30-Day No Delivery Refunds</p>

                    <br>

                    <h4>Securing Your Payment Information</h4>
                    <p>🛡️ We follow PCI DSS standards to ensure your card data is secure.</p>
                    <p>🔒 All transactions are encrypted for maximum protection.</p>
                    <p>🚫 We never sell or share your payment details.</p>

                    <br>

                    <h4>Your Privacy Matters</h4>
                    <p>🔏 We prioritize your privacy and keep your data safe.</p>
                    <p>❌ HexGames does not sell your personal information.</p>
                    <p>✅ Your data is only used to enhance your shopping experience.</p>

                    <br>

                    <h4>GreenCart Purchase Protection</h4>
                    <p>🛍️ Shop with confidence knowing we’ve got you covered if anything goes wrong with your order.</p>
                </div>
            </div>
        </div>
    </div>



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

        function loadBasket() {
    const basket = JSON.parse(localStorage.getItem('basket')) || [];
    const basketItemsContainer = document.getElementById('basket-items');
    basketItemsContainer.innerHTML = '';

    basket.forEach(item => {
        const basketItem = document.createElement('div');
        basketItem.classList.add('basket-item');

        basketItem.innerHTML = `
            <div class="basket-item-container">
                <div class="basket-item-image">
                    <img src="${item.image}" alt="${item.name}" class="basket-img">
                </div>
                <div class="basket-item-details">
                    <p class="name">${item.name}</p>
                    <p class="price">£${item.price.toFixed(2)}</p>
                    <div class="quantity-container">
    <label for="quantity-${item.name}">Quantity:</label>
    <input id="quantity-${item.name}" type="number" class="quantity" value="${item.quantity}" min="1" oninput="updateQuantity('${item.name}', this.value)">
    <button class="remove-btn" onclick="removeItem('${item.name}')">Remove</button>
</div>
                </div>
            </div>
        `;

        basketItemsContainer.appendChild(basketItem);
    });

    calculateTotal();
}

        function updateQuantity(name, quantity) {
            let basket = JSON.parse(localStorage.getItem('basket')) || [];
            const item = basket.find(item => item.name === name);
            if (item) {
                item.quantity = parseInt(quantity) || 1;
            }
            localStorage.setItem('basket', JSON.stringify(basket));
            calculateTotal();
        }

        function removeItem(name) {
            let basket = JSON.parse(localStorage.getItem('basket')) || [];
            basket = basket.filter(item => item.name !== name);
            localStorage.setItem('basket', JSON.stringify(basket));
            loadBasket();
        }

        function calculateTotal() {
            const basket = JSON.parse(localStorage.getItem('basket')) || [];
            const totalElement = document.getElementById('total');

            let total = 0;
            basket.forEach(item => {
                total += item.price * item.quantity;
            });

            totalElement.textContent = `Total: £${total.toFixed(2)}`;
        }

        document.addEventListener('DOMContentLoaded', loadBasket);
    </script>

</body>

</html>