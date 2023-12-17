<?php
    require '../db/conn.php';

    if (isset($_GET['id']) && isset($_GET['watch_value']) && !empty($_GET['id']) && !empty($_GET['watch_value'])) {
        $id = $_GET['id'];
        $value = $_GET['watch_value'];

        // Implement your database connection and query here
        // UpdateItemWatchValue($id, $value);
        
        
    } else {
        echo "<script>alert(\"Error\")</script>";
        header("refresh:0; ../index.php");
        exit();
    }

    function UpdateItemWatchValue($id, $value) {
        $updateQuery = "UPDATE watch_time SET watched = $1 WHERE id = $2";
        $conn = getConnection('../.env');
        $updateResult = pg_query_params($conn, $updateQuery, array($value, $id));
        if ($updateResult) {
            header("refresh:0; ../index.php");
        } else {
            echo "Update failed: " . pg_last_error($conn) . "\n";
            header("refresh:1; ../index.php");
        }             
        pg_close($conn);
    }
?>