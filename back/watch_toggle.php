<?php
    if (isset($_GET['id']) && isset($_GET['watch_value']) && !empty($_GET['id']) && !empty($_GET['watch_value'])) {
        $id = $_GET['id'];
        $value = $_GET['watch_value'];

        // Implement your database connection and query here
        // Example: $response = UpdateItemWatchValue($id, $value);
        
        // if($response) {
        //     header("refresh:0; ../index.php");
        // } else {
        //     header("refresh:0; ../index.php");
        //     exit();
        // }
        
    } else {
        echo "<script>alert(\"Error\")</script>";
        header("refresh:0; ../index.php");
        exit();
    }
?>