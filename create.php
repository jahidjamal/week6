<?php include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $sql = "INSERT INTO students (name, email, course) VALUES (:name, :email, :course)";
  $stmt = $conn->prepare($sql);
  $stmt->execute([
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':course' => $_POST['course']
  ]);
  header("Location: index.php");
}
?>

<form method="post">
  Name: <input type="text" name="name" required><br>
  Email: <input type="email" name="email" required><br>
  Course: <input type="text" name="course" required><br>
  <button type="submit">Save</button>
</form>