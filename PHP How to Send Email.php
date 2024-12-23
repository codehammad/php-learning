<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <h2>Send Email</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="to">To:</label><br>
        <input type="email" id="to" name="to" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="40" required></textarea><br><br>

        <label for="from">Your Email:</label><br>
        <input type="email" id="from" name="from" required><br><br>

        <label for="cc">CC: (optional)</label><br>
        <input type="email" id="cc" name="cc"><br><br>

        <label for="bcc">BCC: (optional)</label><br>
        <input type="email" id="bcc" name="bcc"><br><br>

        <input name="submit" type="submit" value="Send Email">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $from = $_POST['from'];
        $cc = isset($_POST['cc']) ? $_POST['cc'] : ''; // $_POST['cc'] : ''  for optional use
        $bcc = isset($_POST['bcc']) ? $_POST['bcc'] : '';

        $headers = "From: $from\r\n";

        // Check for empty
        if (!empty($cc)) {
            $headers .= "CC: $cc\r\n";
        }
        if (!empty($bcc)) {
            $headers .= "BCC: $bcc\r\n";
        }

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Mail Sent Successfully!";
        } else {
            echo "Failed to send mail.";
        }
    }
    ?>

</body>
</html>
