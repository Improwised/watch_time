<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $id = $_POST['id'];
        $name = $_POST['movieName'];
        $genre = $_POST['genre'];
        $watched = $_POST["watched"];

        // Update details in the database
        // Implement your database connection and query here
        // Example: $response = updateDetails($id, $name, $genre, $watched);
        
        // if($response) {
        //     echo "<script>alert(\"Updated\")</script>";
        //     header("refresh:0; ../index.php");
        // } else {
        //     echo "<script>alert(\"Error\")</script>";
        //     header("refresh:0; ../index.php");
        // }
        exit();
    }
?>