<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($hashed_password);

    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        header('Location: task.html?login=success');
    } else {
        echo 'Invalid email or password.';
    }

    $stmt->close();
    $conn->close();
}
?>
