<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "name");

// Insert new row
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = intval($_POST['age']);
    $conn->query("INSERT INTO users (name, age) VALUES ('$name', $age)");
    header("Location: index.php");
    exit;
}

// Toggle status
if (isset($_POST['toggle'])) {
    $id = intval($_POST['toggle']);
    $res = $conn->query("SELECT status FROM users WHERE ID = $id");
    $row = $res->fetch_assoc();
    $newStatus = $row['status'] == 1 ? 0 : 1;
    $conn->query("UPDATE users SET status = $newStatus WHERE ID = $id");
    header("Location: index.php");
    exit;
}

// Fetch rows
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQL Table Form</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <h2>User Table</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['ID'] ?></td>
            <td><?= htmlspecialchars($row['Name']) ?></td>
            <td><?= $row['Age'] ?></td>
            <td><?= $row['Status'] ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <button name="toggle" value="<?= $row['ID'] ?>">Toggle</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
