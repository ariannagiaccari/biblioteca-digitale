<!-- handle login & autentication -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {   // this checks if the module has been sent with the method 'post'
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: admin.php'); // if credentials are right, this sends you to the page dedicated to users 
        exit;
    } else {
        $error = 'incorrect credentials!';
    }
}
?>
<!-- $_SERVER  $_POST $_SESSION are associative arrays.
$_SERVER contains data related to the server and the http request 
$_POST contains data sent through the html module with post method
$_SESSION  memorizes data for the user session. keeps the info between pages, like user identification -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <title>Login</title>
</head>

<body>
    <div class="login-area">
      
        
        <form method="post">
              <h2>Login</h2>
            <label for="username">username:</label>
            <input type="text" name="username">
            <label for="password">password:</label>
            <input type="password" name="password">
            <button type="submit">login</button>
        </form>

        <!-- shows the error message if credentials are wrong -->
        <?php if (isset($error)) // isset($var) is a function that verifies if a var was defined and is not null
                echo "<p> $error </p>"
                    ?>
        </div>
    </body>

    </html>