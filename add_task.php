<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'todo_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the new task
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}