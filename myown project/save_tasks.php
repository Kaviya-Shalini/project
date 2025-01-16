<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Save tasks
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dayType = $_POST['dayType'];
  $primaryTask = $_POST['primaryTask'];
  $secondaryTask = $_POST['secondaryTask'];
  $importantTask = $_POST['importantTask'];

  $sql = "INSERT INTO tasks (day_type, primary_task, secondary_task, important_task)
          VALUES ('$dayType', '$primaryTask', '$secondaryTask', '$importantTask')";

  if ($conn->query($sql) === TRUE) {
    echo "Tasks saved successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
