<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>

<body>

    <!-- Simple form with email field -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php

    if (isset($_REQUEST['submit'])) {

        if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            echo "Valid email.";
        } else {
            echo "Invalid email.";
        }
    }
    ?>
</body>

</html>