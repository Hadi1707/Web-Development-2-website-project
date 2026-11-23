<?php
require_once "db.php";
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <title>My reservations</title>
</head>
<body>
  <header>
    <nav aria-label="Main navigation">
<?php if (isset($_SESSION['Username'])) { 
?>
<a href="index.php">Home</a>
<a href="search.php">Find a book</a>
<a href="reservations.php">My reservations</a>
<?php } else { ?>
<a href="index.php">Home</a>
<a href="login.php">Log in</a>
<?php } ?>
</nav>
<h1> Reserve page: </h1>
  </header>

<footer>
    <p>&copy; 2026 Library Reservation System</p>
    <p>Developed by Hadi Zreik</p>
    <p>Web Development Assignment | TU Dublin</p>
</footer>

</body>
</html>
