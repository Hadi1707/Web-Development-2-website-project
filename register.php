<?php
require_once "db.php";
?>

<!doctype html>
<html lang="en">
<head>
  <title>Create account</title>
  </head>
<body>
  <header>
    <nav aria-label="Main navigation"><a href="index.php">Home</a><a href="search.php">Find a book</a><a href="login.php">My account</a></nav>
    <a href="login.php">Log in</a>
  </header>
  <main>
      <section>
      <span>GET STARTED</span><h2>Create account</h2><p>All fields are required.</p>
        <form id="registerForm" action="register.php" method="post">
        <div><label for="first_name">First name</label><input id="first_name" name="first_name" type="text" autocomplete="first_name" required></div>
	<div><label for="last_name">Last name</label><input id="last_name" name="last_name" type="text" autocomplete="last_name" required></div>
        <div><label for="new_username">Username</label><input id="new_username" name="username" type="text" autocomplete="username" required></div>
	<div><label for="address_line1">Address Line 1</label><input id="address_line1" name="address_line1" type="text" autocomplete="address_line1" required></div>
	<div><label for="address_line2">Address Line 2</label><input id="address_line2" name="address_line2" type="text" autocomplete="address_line2" required></div>
	<div><label for="city">City</label><input id="city" name="city" type="text" autocomplete="city" required></div>
	<div><label for="telephone">Telephone number(Optional)</label><input id="telephone" name="telephone" type="tel" inputmode="numeric" pattern="[0-9]{10}" maxlength="10" minlength="10" title="Enter exactly 10 digits"></div>
        <div><label for="mobile">Mobile number</label><input id="mobile" name="mobile" type="tel" inputmode="numeric" pattern="[0-9]{10}" maxlength="10" minlength="10" title="Enter exactly 10 digits" required></div>
        <div>
          <div><label for="new_password">Password</label><input id="new_password" name="password" type="password" minlength="6" maxlength="6" autocomplete="new-password" required></div>
          <div><label for="confirm_password">Confirm password</label><input id="confirm_password" name="confirm_password" type="password" minlength="6" maxlength="6" autocomplete="new-password" required></div>
        </div>
       </form>
      <p>Already registered? <a href="login.html">Log in</a></p>
    </section>
  </main>

<footer>
    <p>&copy; 2026 Library Reservation System</p>
    <p>Developed by Hadi Zreik</p>
    <p>Web Development Assignment | TU Dublin</p>
</footer>

 </body>
</html>
