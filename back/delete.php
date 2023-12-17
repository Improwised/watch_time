<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        
        // Implement your database connection and query here
        // Example: $response = deleteItem($id);
        
        // if($response) {
        //     echo "<script>alert(\"Deleted\")</script>";
        //     header("refresh:0; ../index.php");
        // } else {
        //     echo "<script>alert(\"Error\")</script>";
        //     header("refresh:0; ../index.php");
        //     exit();
        // }
        
    } else {
        // Redirect to the homepage or display an error message
        echo "<script>alert(\"Error\")</script>";
        header("refresh:0; ../index.php");
        exit();
    }
?>