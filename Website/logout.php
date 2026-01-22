<!-- filepath: /Applications/XAMPP/xamppfiles/htdocs/ITCW-Testing 2/logout.php -->
<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: Loginpage.php");
exit();
?>