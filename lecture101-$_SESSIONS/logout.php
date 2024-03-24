
<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['username'])) {
    // Destroy session (logout)
    session_destroy();
}

// Redirect to login page
header('Location: login.php');
exit(); // Ensure no further code execution after redirect
?>
