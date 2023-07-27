<?php
session_start();

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if the username and password are correct
    if ($username == 'admin' && $password == 'password') {
        // store the username in a session variable
        $_SESSION['username'] = $username;

        // redirect the user to the voting page
        header('Location: voting.php');
        exit();
    } else {
        // display an error message
        $error = 'Invalid username or password';
    }
}
?>