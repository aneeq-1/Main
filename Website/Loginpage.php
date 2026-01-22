<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'db_connect.php';

// Start the session
session_start();

// Initialize error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT Email, Password, Role FROM Users WHERE Email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $stmt->store_result();

    // Check if a user with the given email exists
    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($db_email, $db_password, $db_role);

        // Fetch the result
        $stmt->fetch();

        // Directly compare the plain text password
        if ($password === $db_password) {
            // Password is correct, start a session
            $_SESSION['email'] = $db_email;
            $_SESSION['role'] = $db_role;

            // Redirect based on the role
            if ($db_role === "ADMIN") {
                header("Location: AdminWelcomePage.html");
            } else {
                header("Location: Homepage.php");
            }
            exit();
        } else {
            // Password is incorrect
            $error_message = "Invalid email or password.";
        }
    } else {
        // No user found with the given email
        $error_message = "Invalid email or password.";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,300;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="LogInSignUp.css">
</head>
<body>
    <video autoplay muted loop>
        <source src="Images/blueabstract.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <a href="Homepage.php"><img src="Images/logo.png" height="200" width="200"></a>
    <h1>-HEX-</h1>
    <h2>GAMES</h2>
    <h3>Login</h3>
    <div class="wrapper">
        <!-- Display the error message if it exists -->
        <?php
        if (!empty($error_message)) {
            echo "<p style='color:red; text-align:center;'>$error_message</p>";
        }
        ?>
        <form action="Loginpage.php" method="post">
            <div class="input-box">
                <input type="text" id="Email" name="Email" placeholder="Email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="Password" placeholder="Password" required>
            </div>
            <label><input type="checkbox">Remember Me</label><br><br>
            <input class="button" type="submit" value="Login"><br><br>
            Don't have an account? <a href="signUpPage.html">Sign Up</a>
        </form>
    </div>
</body>
</html>