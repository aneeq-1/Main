<?php
// Start the session if it hasn't already been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div id="sideMenu" class="side-menu">
    <a href="javascript:void(0)" class="close-btn" onclick="closeMenu()">&times;</a>
    <?php if (isset($_SESSION['email'])): ?>
        <!-- Show Logout button if the user is logged in -->
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <!-- Show Sign In button if the user is not logged in -->
        <a href="Loginpage.php">Sign In</a>
    <?php endif; ?>
    <!-- Additional links -->
    <a href="Basket.php">Shopping Basket</a>
    <a href="AboutUs.php">About Us</a>
    <a href="ContactUs.php">Contact Us</a>
    
</div>