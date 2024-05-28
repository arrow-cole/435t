<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Here you can process the form data (send an email, save to database, etc.)
    // For now, we'll just print it out
    echo "<h2>Thank you, $name, for your message!</h2>";
    echo "<p>We will contact you at $email shortly.<p>";
}
?>
