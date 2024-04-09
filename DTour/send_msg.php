<?php 

include 'connect.php';

if(isset($_POST['submit-msg'])){
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insertQuery = "INSERT INTO messages (fullName, email, message) VALUES ('$fullName', '$email', '$message')";

    if($conn->query($insertQuery) === TRUE){
        $_SESSION['message_sent'] = true;
        header("Location: contact.php");
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}
?>