<?php
	require_once __DIR__ . '/conf/config.php';

	if ($_SESSION['logged_in']) {
		header('Location: /admin.php');
		exit;
	}

	$metaTitle = 'Login';

	$error = '';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {   // this checks if the module has been sent with the method 'post'
	    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
	        $_SESSION['logged_in'] = true;
	        header('Location: /admin.php'); // if credentials are right, this sends you to the page dedicated to users 
	        exit;
	    } else {
	        $error = 'incorrect credentials!';
	    }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include __DIR__ . '/inc/head.php';
?>
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
        <p><?= $error ?></p>
    </div>
</body>
</html>
