<?php

namespace App\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
use App\classes\Database;
use App\classes\Helper;
use App\classes\Session;

// Include the Composer autoload file
// require 'vendor/autoload.php';
class Mail
{
    // Method to send mail
    public static function sendMail($data)
    {
        // Validate input data
        if (empty($data['name'])) {
            Session::set('emptyName', "Name is required");
            return;
        }
        if (empty($data['email'])) {
            Session::set('emptyEmail', "Email is required");
            return;
        }
        if (empty($data['phone'])) {
            Session::set('emptyPhone', "Phone number is required");
            return;
        }
        if (empty($data['subject'])) {
            Session::set('emptySubject', "Subject is required");
            return;
        }
        if (empty($data['message'])) {
            Session::set('emptyMsg', "Message is required");
            return;
        }

        // Filter and sanitize input data
        $name = Helper::filter($data['name']);
        $name = mysqli_real_escape_string(Database::db(), $name);
        $email = $data['email'];
        $phone = $data['phone'];
        $subject = $data['subject'];
        $message = Helper::filter($data['message']);

        // Insert the mail into the database
        $sql = "INSERT INTO `mails` (`name`, `email`, `subject`, `phone`, `message`, `status`) VALUES ('$name', '$email', '$subject', '$phone', '$message', '1')";
        $res = mysqli_query(Database::db(), $sql);

        if ($res) {
            Session::set('successMail', "Mail saved successfully");

            // Send email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com'; // SMTP server
                $mail->SMTPAuth   = true; // Enable SMTP authentication
                $mail->Username   = 'shimetechane@gmail.com'; // SMTP username
                $mail->Password   = 'qpri kgdv ljtz fchz '; // SMTP password (use app-specific password for Gmail)
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
                $mail->Port       = 587; // TCP port to connect to

                // Recipients
                $mail->setFrom('shimetechane@gmail.com', 'Shime Techane');
                $mail->addAddress('shimebet1213@gmail.com'); // Add a recipient

                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = htmlspecialchars($subject);
                $mail->Body    = '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>'
                    . '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>'
                    . '<p><strong>Message:</strong> ' . nl2br(htmlspecialchars($message)) . '</p>';

                // Send email
                $mail->send();
                echo 'Your message has been sent successfully Thanks for your Ideas.';
            } catch (Exception $e) {
                echo "Failed to send email. Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Invalid request.";
        }
    }
    // Method to show all mails
    public static function showAllMail()
    {
        $sql = "SELECT * FROM `mails` WHERE status != 0 ORDER BY id DESC";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? $result : false;
    }

    // Method to show trashed mails
    public static function showTrashMail()
    {
        $sql = "SELECT * FROM `mails` WHERE status = 0 ORDER BY id DESC";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? $result : false;
    }

    // Method to count all mails
    public static function countAllMail()
    {
        $sql = "SELECT * FROM `mails`";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? mysqli_num_rows($result) : false;
    }

    // Method to count new mails
    public static function countNewMail()
    {
        $sql = "SELECT * FROM `mails` WHERE status = 1";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? mysqli_num_rows($result) : false;
    }

    // Method to count trashed mails
    public static function countAllTrashMail()
    {
        $sql = "SELECT * FROM `mails` WHERE status = 0";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? mysqli_num_rows($result) : false;
    }

    // Method to mark a mail as seen
    public static function seenMail($id)
    {
        $sql = "UPDATE `mails` SET `status` = '2' WHERE `id` = $id";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? true : false;
    }

    // Method to move a mail to trash
    public static function makeTrashMail($id)
    {
        $sql = "UPDATE `mails` SET `status` = '0' WHERE `id` = $id";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? true : false;
    }

    // Method to delete a mail permanently
    public static function deleteMail($id)
    {
        $sql = "DELETE FROM `mails` WHERE `id` = $id";
        $res = mysqli_query(Database::db(), $sql);
        return $res ? true : false;
    }

    // Method to get a single mail's details
    public static function singleMail($id)
    {
        $sql = "SELECT * FROM `mails` WHERE `id` = $id";
        $result = mysqli_query(Database::db(), $sql);
        if ($result) {
            return mysqli_num_rows($result) == 0 ? false : $result;
        } else {
            return false;
        }
    }

    // Method to save a reply to a mail
    public static function saveReply($data)
    {
        $id = $data['id'];
        $user = $_SESSION['username'];
        $reply = $data['reply'];
        $email = $data['email'];
        $sql = "INSERT INTO `replies`(`email_id`, `user`, `reply`) VALUES ('$id', '$user', '$reply')";
        $res = mysqli_query(Database::db(), $sql);
        if ($res) {
            Session::set('replySent', "Reply sent successfully!");

            // Send reply using PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();                                         // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                          // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                  // Enable SMTP authentication
                $mail->Username = 'your-email@gmail.com';                // SMTP username
                $mail->Password = 'your-app-password';                   // SMTP password or app-specific password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption
                $mail->Port = 587;                                       // TCP port to connect to

                // Recipients
                $mail->setFrom('your-email@gmail.com', $user);
                $mail->addAddress($email);                               // Send to the original email address

                // Content
                $mail->isHTML(true);                                     // Set email format to HTML
                $mail->Subject = "Reply to your message";
                $mail->Body = $reply;
                $mail->AltBody = strip_tags($reply);                     // Plain text alternative

                $mail->send();
                Session::set('replyMailSuccess', "Reply email sent successfully!");
            } catch (Exception $e) {
                Session::set('replyMailFail', "Failed to send reply email. Error: {$mail->ErrorInfo}");
            }
        } else {
            Session::set('replyNotSent', "Reply not sent");
        }
    }

    // Method to display new mails
    public static function displayNewMail()
    {
        $sql = "SELECT * FROM `mails` WHERE status = 1 ORDER BY id DESC";
        $result = mysqli_query(Database::db(), $sql);
        return $result ? $result : false;
    }
}
