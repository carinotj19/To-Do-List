<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Simple To-Do List</h1>
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Enter your task here" required>
        <button type="submit">Add Task</button>
    </form>
    
    <h2>Your Tasks</h2>
    <ul>
        <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'todo_db');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch tasks from the database
        $result = $conn->query("SELECT * FROM tasks");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['task']);
            if ($row['status'] == 0) {
                echo " <a href='mark_done.php?id=" . $row['id'] . "'>Mark as Done</a>";
            }
            echo " <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a></li>";
        }
        ?>
    </ul>
</body>
</html>