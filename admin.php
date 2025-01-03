<?php
session_start();
if (!isset($_SESSION['logged_in'])) { //checks if the user is authenticated, if logged in is false (!isset) the user will be sent to the login page
    header('Location: login.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('books.json'), true);
    //  json_decode (..., true) converts the json string into a php associative array. the True param makes sure the result is an array and not an obj
    // file_get_contents() reads the content of the boks.json file & returns a string
    $newBook = [     // this collects data from the html form throught the $POST array 
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'genre' => $_POST['genre'],
        'copies' => (int) $_POST['copies']     // converts the value into a int
    ];
    $books[] = $newBook;   // add the new book to the array $books
    file_put_contents('books_json', json_encode($books, JSON_PRETTY_PRINT));
    // file_put_contents() overwrites the books.json file with the new json string, saving the updated list
    // json_encode($books, JSON_PRETTY_PRINT) converts the $books array in a json string 
    $message = "book successfully added";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <title>Reserved area</title>
</head>

<body>
    <div class="reserved-area">
      
        
        <form method="post"> 
             <h1>Reserved area</h1>
             
            <label for="title">title:</label>
            <input type="text" name='title'>
            <label for="author">author:</label>
            <input type="text" name='author'>
        
            
            <label for="genre">genre:</label>
            <input type="text" name='genre'>
            <label for="copies">copies:</label>
            <input type="number" name='copies'>
        
            <button type="submit">add book:</button>
            <?php if (isset($message))
                echo "<p> $message </p>" ?>

            </form>
        </div>
    </body>

    </html>