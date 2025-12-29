<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student List</title>
</head>
<body>
<h2>Student List</h2>

<a href="create.php">Add Student</a><br><br>

<table border="1" cellpadding="10">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Course</th>
  <th>Actions</th>
</tr>

<?php
$stmt = $conn->query("SELECT * FROM students");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>
  <td>{$row['id']}</td>
  <td>{$row['name']}</td>
  <td>{$row['email']}</td>
  <td>{$row['course']}</td>
  <td>
    <a href='edit.php?id={$row['id']}'>Edit</a> |
    <a href='delete.php?id={$row['id']}'>Delete</a>
  </td>
  </tr>";
}
?>
</table>
</body>
</html>