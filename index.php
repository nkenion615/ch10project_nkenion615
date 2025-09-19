<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Building a Dynamic Form with PHP</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Building a Dynamic Form with PHP</h1>
    <p>Najee Kenion</p>
    <p>September 18, 2025</p>

    <form method="POST" action="confirm.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
