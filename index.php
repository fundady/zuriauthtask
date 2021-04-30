<?php include_once 'resource/session.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Homepage</title>

</head>
<body>
<h2>User Authentication System</h2>



<?php if (!isset($_SESSION['username'])):?>

<p>You are currently not signin <a href="login.php">Login</a> <br> Not yet a member? <a href="signup.php">Signup</a></p>
<?php else: ?>
<p>You are logged in as <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>

<?php endif; ?>



</body>
</html>