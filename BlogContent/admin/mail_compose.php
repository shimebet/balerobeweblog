<?php
// mail_compose.php
use App\classes\Session;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: your-email@example.com'; // replace with your actual email

    if (mail($to, $subject, $message, $headers)) {
        Session::set("replysent", "Reply sent successfully!");
    } else {
        Session::set("replynotsent", "Failed to send reply.");
    }

    header("Location: inbox.php"); // redirect to inbox or any page you want after sending
    exit();
}

// Fetch data if available from GET parameters
$recipientEmail = isset($_GET['email']) ? $_GET['email'] : '';
$originalSubject = isset($_GET['subject']) ? 'Re: ' . $_GET['subject'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose Reply</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Add your CSS link here -->
    <link rel="stylesheet" href="path/to/font-awesome.min.css"> <!-- Add FontAwesome link here -->
</head>
<body>
    <div class="container mt-5">
        <h2>Compose Reply</h2>
        <form action="mail_compose.php" method="post">
            <div class="form-group">
                <label for="email">To:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($recipientEmail) ?>" readonly>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" value="<?= htmlspecialchars($originalSubject) ?>" readonly>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your reply here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <script src="path/to/jquery.min.js"></script> <!-- Add your jQuery link here -->
    <script src="path/to/bootstrap.bundle.min.js"></script> <!-- Add your Bootstrap JS link here -->
</body>
</html>
