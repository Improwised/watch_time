<?php
    require '../db/conn.php';
    
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        
        // Implement your database connection and query here
        // Example: $response = deleteItem($id);
        
        //____try to uncomment me Exercise - 9____________________
        // deleteItem($id);

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

    function deleteItem($id) {
        $deleteQuery = "DELETE FROM watch_list WHERE id = 1";
        $conn = getConnection('../.env');
        $deleteResult = pg_query_params($conn, $deleteResult, array($id));
        if ($deleteResult) {
            header("refresh:0; ../index.php");
        } else {
            echo "Deletion failed: " . pg_last_error($conn) . "\n";
            header("refresh:3; ../index.php");
        }             
        pg_close($conn);
    }
?>