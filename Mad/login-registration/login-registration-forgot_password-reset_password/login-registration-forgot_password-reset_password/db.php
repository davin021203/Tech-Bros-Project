<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'data';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

if(isset($_POST['register'])){
    // Retrieve the form data
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Escape the input data
    $firstname = $mysqli->real_escape_string($firstname);
    $lastname = $mysqli->real_escape_string($lastname);
    $email = $mysqli->real_escape_string($email);
    $password = $mysqli->real_escape_string($password);

    // Hash the password
    $password = password_hash($password, PASSWORD_BCRYPT);

    // Perform the insertion into the database
    $insert = $mysqli->query("INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')");
    if($insert){
        // Redirect to success page
        header("Location: success.php");
        exit();
    }
    else{
        // Redirect to failure page
        header("Location: failure.php");
        exit();
    }
}

if(isset($_POST['login'])){
    // Retrieve the form data
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Escape the input data
    $email = $mysqli->real_escape_string($email);

    // Check the login credentials against the database
    $result = $mysqli->query("SELECT password FROM users WHERE email='$email'");
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        $hash = $user['password'];

        // Verify the password
        if(password_verify($password, $hash)){
            // Start the session and redirect to the profile page
            session_start();
            $_SESSION['logged_in'] = true;
            header("Location: profile.php");
            exit();
        }
    }

    // Redirect to the login page with an error message
    header("Location: index.php?error=incorrect");
    exit();
}
