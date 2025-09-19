<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Building a Dynamic Form with PHP</h1>
    <p>Najee Kenion</p>
    <p>September 18, 2025</p>

    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store form inputs into variables and trim whitespace
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        // Sanitize the email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Check if fields are empty
        if (empty($name) || empty($email) || empty($message)) {
            $output = "<div class='error'>All fields are required. Please go back and try again.</div>";
        } else {
            // Success message
            $output = "<div class='success'>Form submitted successfully!</div>";
            $output .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
            $output .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            $output .= "<p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
        }

        // Display output
        echo $output;
    }
    ?>
</body>
</html>
