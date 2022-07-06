<?php
$insert = false;
if (isset($_POST['careerform'])) {
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
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $matricpercent = $_POST['matricpercent'];
    $education = $_POST['education'];

    $sql = "INSERT INTO `qms`.`career` (`name`, `email`, `phone`, `subject`,`matricpercent`,`education`, `message`, `date`) VALUES ('$name', '$email', '$phone','$subject', '$matricpercent','$education', '$message', current_timestamp());";
    if ($conn->query($sql) == true) {
        $insert = true;
    } else {
        echo "Error :" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>