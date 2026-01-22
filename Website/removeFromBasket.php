<?php
// Start the session
session_start();

// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $basket_id = intval($_POST['basket_id']);

    // Remove the item from the basket
    $stmt = $conn->prepare("DELETE FROM basket WHERE ID = ?");
    $stmt->bind_param("i", $basket_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect to the basket page
    header("Location: Basket.php");
    exit();
}
?>