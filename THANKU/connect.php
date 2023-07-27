<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];
$department = $_POST['department'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$admissionNumber = $_POST['admission_number'];
$dob = $_POST['dob'];


$conn = new mysqli('localhost', 'root', '', 'test1');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (name, email, username, password, confirm_password, department, address, phone, admission_number, dob)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssis", $name, $email, $username, $password, $confirmPassword, $department, $address, $phone, $admissionNumber, $dob);
    $stmt->execute();
    echo "Registration successful....";
    $stmt->close();
    $conn->close();
}
?>