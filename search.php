<?php
require_once "db.php";
?>

<!doctype html>
<html lang="en">
<head>
  <title>Find a book</title></head>
<body>
  <header>
    <nav aria-label="Main navigation"><a href="index.php">Home</a>
    <a href="search.php">Find a book</a>
    <a href="my-reservations.php">My reservations</a></nav>
    <a href="login.php">Log in</a>
<h1>This is the search page</h1>

	<div><label for="title">Title</label><input id="title" name="title" type="text" autocomplete="title" required></div>
        <div><label for="author">Author</label><input id="author" name="author" type="author" autocomplete="author" required></div>
<p><label for="category">Category:</label>
<select name="category" id="category">
<option value="0">-- Please Select -- </option>
<option value="1">Science-fiction</option>
<option value="2">Drama</option>
<option value="3">Romance</option>
<option value="4">History</option>
<option value="5">Science-fiction</option>
<option value="6">Drama</option>
<option value="7">Romance</option>
<option value="8">History</option>

</select>
</p>
<button type="submit">Submit<span aria-hidden="true"></span></button>



  </header>

<footer>
    <p>&copy; 2026 Library Reservation System</p>
    <p>Developed by Hadi Zreik</p>
    <p>Web Development Assignment | TU Dublin</p>
</footer>
</body>
</html>
