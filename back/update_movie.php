<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $id = $_POST['id'];
        $name = $_POST['movieName'];
        $genre = $_POST['genre'];
        $watched = $_POST["watched"];

        // Update details in the database
        // Implement your database connection and query here
        // Example: updateDetails($id, $name, $genre, $watched);

        // Redirect to the homepage or display a success message
        header('Location: ../index.php');
        exit();
    }
?>