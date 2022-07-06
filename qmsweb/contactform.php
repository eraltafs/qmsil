<?php
$insert = false;
if (isset($_POST['contactform'])) {
    $server = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($server, $username, $password);
    if (!$conn) {
        die("connection not stablished due to :" . mysqli_connect_error());
    }
    // echo "connected"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `qms`.`contact` (`name`, `email`, `phone`, `message`, `date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());";
    if ($conn->query($sql) == true) {
        $insert = true;
    } else {
        echo "Error :" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>