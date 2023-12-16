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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve movie data from the POST request
        // here example given for watched
        $watched = $_POST["watched"];

        // Simple validation
        if (empty($_POST["movieName"]) || empty($_POST['genre'])) {
            echo '<div class="message-container error-message">Please fill in all fields.</div>';
            header("refresh:2;url=../pages/add.php");
            exit();
        } else {
            echo '<div class="message-container">Movie saved successfully!</div>';
            header("refresh:2;url=../index.php");
            exit();
        }
    } else {
        echo '<div class="message-container error-message">Invalid request.</div>';
        header("refresh:2;url=../index.php");
        exit();
    }
    ?>
</body>
</html>
