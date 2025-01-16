<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $dob = $_POST['dob'];

    $sql = "INSERT INTO users (name, email, user_id, password, dob) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $name, $email, $user_id, $password, $dob);

    if ($stmt->execute()) {
        header('Location: login.html?signup=success');
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

