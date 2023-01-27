<?php

$name = $_POST['name'];
$company = $_POST['company'];
$contact_details = $_POST['contact_details'];
$email = $_POST['email'];
$message = $_POST['message'];
if (isset($_POST['name']) && isset($_POST['email'])) {
    // storing this data to a file
    $file = fopen("form_data.txt", "a") or die("Unable to open file!");
    $to = "shakeel2717@gmail.com";
    $subject = "Form Submission";
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Contact: " . $_POST['contact_details'] . "\n";
    $message .= "Company: " . $_POST['contact_details'] . "\n";
    $message .= "Message: " . $_POST['message'] . "\n";
    fwrite($file, $message);
    fclose($file);
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    echo "Form submitted successfully!";
} else {
    echo "Please Fill in all Required Fields to Submit the Form.";
}
