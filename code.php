<?php
// Set the SMTP server and port
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587); // Change this port according to your SMTP server configuration

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database credentials
    $host = 'localhost';
    $dbname = 'tc_lottery';
    $user = 'root';
    $password = '';

    try {
        // Connect to the database using PDO
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the INSERT query
        $stmt = $db->prepare("INSERT INTO contact (name, email, contact, msg) VALUES (:name, :email, :contact, :msg)");

        // Bind parameters and execute the query
        $stmt->execute(array(
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':contact' => $_POST['contact'],
            ':msg' => $_POST['msg'],
        ));

        // Send an email to the admin
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $msg = $_POST['msg'];
        $to = "errawatshivani@gmail.com";
        $subject = "Tc lottery Contact Form Data";
        $txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n  Contact= " . $contact . "\r\n  msg= " . $msg ;
         $headers = "From: shi8081vanirawat@gmail.com" . "\r\n" ;
            
        if ($email != NULL) {
            mail($to, $subject, $txt, $headers);
        }

        // Redirect to a thank-you page or display a success requirement
        echo "<script>alert('Successfully submitted'); window.location.href='index.php';</script>";
        exit();
    } catch (PDOException $e) {
        // Handle database connection or query errors
        echo "<script>alert('Something Wrong'); window.location.href='index.php';</script>" . $e->getMessage();
    }
}

?>
