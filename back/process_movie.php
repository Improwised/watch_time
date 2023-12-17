<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Submition Page</title>
</head>
<body>
    <?php
    require '../db/conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve movie data from the POST request

        // here example given for watched
        /* Exercise-1:
           - Define the variables to catch $_POST['movieName'] and $_POST['genre']
           - Print those variables in Movie saved successfully! message
        */
        $watched = $_POST["watched"];
        //for watched try this
        // $watched = isset($_POST['watched']) ? 'true' : 'false';

        // Simple validation
        if (empty($_POST["movieName"]) || empty($_POST['genre'])) {
            echo '<div class="message-container error-message">Please fill in all fields.</div>';
            //_______try to uncomment me in exercise 8______________
            // addMovie($movieName, $genre, $watched);
            header("refresh:2;url=../pages/add.php");
            exit();
        } else {
            echo '<div class="message-container">Movie saved successfully!
            <br><br> Movie Name: ' . /* Movie Name */  '<br>Genre: ' . /* Genre */ '</div>';
            header("refresh:2;url=../index.php");
            exit();
        }
    } else {
        echo '<div class="message-container error-message">Invalid request.</div>';
        header("refresh:2;url=../index.php");
        exit();
    }

    function addMovie($movieName, $genre, $watched){
        /* Exercise - 8
           - Write insertion query for movie
           - figure out which parameter it needed
           - uncomment addMovie() function in line 28
           - try to add new movie
        */
        $insertQuery = "Write Your Query here";
        $conn = getConnection('../.env');
        $insertResult = pg_query_params($conn, $insertQuery, array($movieName, $genre, $watched));
        if ($insertResult) {
            header("refresh:0; ../index.php");
        } else {
            echo "Update failed: " . pg_last_error($conn) . "\n";
            header("refresh:3; ../index.php");
        }             
        pg_close($conn);
    }
    ?>
</body>
</html>
