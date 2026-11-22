<?php
require_once "db.php";

session_start();

if(isset($_POST['Username']) && isset($_POST['Password'])){

$username =  $conn->real_escape_string($_POST['Username']);
$password = $conn->real_escape_string($_POST['Password']);

$sql = "SELECT * FROM users WHERE Username = '$username' AND Password= '$password'";

$result = $conn->query($sql);

if($result->num_rows == 1){
$_SESSION['Username'] = $username;
header("Location: index.php");
return;
} 
else {
$_SESSION["error"] = "Incorrect Username or Password.";
header( 'Location: login.php' ) ;
return;
}
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Log in</title>
</head>
<body>
  <header>
    <nav aria-label="Main navigation"><a href="index.php">Home</a>
<a href="search.php">Find a book</a>
<a href="login.php">My account</a></nav>
    <a href="register.php">Join the library</a>
  </header>
      <span>YOUR ACCOUNT</span><h2>Log in</h2><p>Enter your account details to continue.</p>

	<?php
if ( isset($_SESSION["error"]) ) {
echo('<p style="color:red">Error:'.
$_SESSION["error"]."</p>\n");
unset($_SESSION["error"]);
}
?>

      <form action="login.php" method="post">
        <label for="username">Username</label><input id="username" name="Username" type="text" autocomplete="username" required>
        <div><label for="password">Password</label><input id="password" name="Password" type="password" autocomplete="current-password" required></div>
        <button type="login">Login <span aria-hidden="true"></span></button>
      </form>
      <p>New to PageTurn? <a href="register.php">Create an account</a></p>
  </main>

<footer>
    <p>&copy; 2026 Library Reservation System</p>
    <p>Developed by Hadi Zreik</p>
    <p>Web Development Assignment | TU Dublin</p>
</footer>

  </body>
</html>
