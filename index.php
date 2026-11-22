<?php
require_once "db.php";
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
</head>
<body>
  <header>
      <nav aria-label="Main navigation">
      <a href="index.php">Home</a>
      <a href="search.php">Find a book</a>
      <a href="login.php">My account</a>
    </nav>
    <a href="register.php">Join the library</a>
<h1>Library Reservation System</h1>
<?php 
if(isset($_SESSION['Username'])){
echo "<h2>Welcome " . htmlspecialchars($_SESSION['Username']) ."!</h2>";
}
else{
echo "<h2> Welcome Guest! </h2>";
}
?>  
  </header>
<main>
<div><p>Current available books:</p></div>

<h2>Current Available Books</h2>

<?php
$sql = "SELECT BookTitle, Author
        FROM Books
        WHERE Reserved = 0
        LIMIT 4";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "<p>" . $row['BookTitle'];
	echo " by " . $row['Author'];
	echo "</p>";
}
?>


<div><h2>Most recently added books:</h2></div>

<?php
$sql = "SELECT BookTitle, Author
        FROM Books
        ORDER BY ISBN DESC
        LIMIT 2";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "<p>" . $row['BookTitle'];
	echo " by " . $row['Author'];
	echo "</p>";
}
?>

  </main>

<footer>
    <p>&copy; 2026 Library Reservation System</p>
    <p>Developed by Hadi Zreik</p>
    <p>Web Development Assignment | TU Dublin</p>
</footer>

    </body>
</html>
