<?php
	require_once __DIR__ . '/conf/config.php';

	if ($_SESSION['logged_in']) {
		header('Location: /admin.php');
		exit;
	}

	$metaTitle = '';
?><!DOCTYPE html>
<html lang="en">
<head>
<?php
    include __DIR__ . '/inc/head.php';
?>
  </head>
  <body>
    <div>
      <nav>
        <a href="login.php">Login</a>
      </nav>
 
        <h1 class="library-heading">Biblioteca digitale</h1>

      <div class="search-div">
        <input
          type="text"
          id="search-input"
          placeholder="cerca libro per genere, titolo o autore..."
        />
      </div>
      <div class="books-list">
        <!-- books div uploaded by js -->
      </div>

      <footer>
        <p> &#169 2024 biblioteca digitale</p>
      </footer>
    </div>
    <script src="script.js"></script>
  </body>
</html>
