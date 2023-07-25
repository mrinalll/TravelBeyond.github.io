<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "tour";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection Failed:", mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: ", mysqli_error($conn);
        exit;
    }

    echo '<div style="background-color: #f2f2f2; padding: 20px; border-radius: 5px;">
        <p style="font-size: 18px; color: #333; line-height: 1.5;">Hi there!</p>
        <p style="font-size: 18px; color: #333; line-height: 1.5;">Thank you for reaching out to us. We appreciate your interest in our tour and travel services. Your message has been received, and we will get back to you shortly.</p>
        <p style="font-size: 18px; color: #333; line-height: 1.5;">At our website, we offer a wide range of exhilarating tour packages that will take you on unforgettable journeys. Our travel experiences are specially designed to inspire adventure and create lasting memories. Whether you\'re seeking thrilling outdoor activities, cultural explorations, or relaxation in breathtaking destinations, we have something for everyone.</p>
        <p style="font-size: 18px; color: #333; line-height: 1.5;">Stay tuned, and we will soon be in touch with you to discuss your travel preferences and help you plan your dream vacation.</p>
        <p style="font-size: 18px; color: #333; line-height: 1.5;">Warm regards,<br>Travel Beyond.com</p>
      </div>';

    mysqli_close($conn);
?>
