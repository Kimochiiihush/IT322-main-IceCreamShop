<?php
include("../dB/config.php");
session_start();

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];

    // Check if password and confirm password match
    if ($password !== $cpassword) {
        $_SESSION['status'] = "Passwords do not match";
        $_SESSION['status_code'] = "error";
        header('location:../registration.php');
        exit();
    }

    // Check if email already exists using a prepared statement
    $checkQuery = "SELECT * FROM `users` WHERE `email` = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['status'] = "Email address is already taken";
        $_SESSION['status_code'] = "error";
        header('location:../registration.php');
        exit();
    }

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $insertQuery = "INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `phoneNumber`, `gender`, `birthday`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssssss", $firstname, $lastname, $email, $hashedPassword, $phoneNumber, $gender, $birthday);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        $_SESSION['status'] = "Registration successful. Please log in.";
        $_SESSION['status_code'] = "success";
        header('location: ../login.php'); // Redirect to login page
        exit();
    } else {
        $_SESSION['status'] = "Error: " . $stmt->error;
        $_SESSION['status_code'] = "error";
        header('location:../registration.php');
        exit();
    }
}
?>
