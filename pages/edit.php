<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Update Watchlist Item</title>
</head>
<body>
    <?php include '../inc/header.php'; ?>
    <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        
            // Fetch details from the database based on $id
            
            // Implement your database connection and query here
            // Example: $details = fetchDetails($id);
            
        } else {
            // Redirect to the homepage or display an error message
            header('Location: ../index.php');
            exit();
        }
    ?>
    <div class="form-pre-container">
        <form id="movieForm" class="form-container" action="../back/update_movie.php" method="post">
            <label for="movieName" class="form-label">Movie Name: </label>
            <input type="text" id="movieName" name="movieName" class="form-input" value="<?php echo /* Write movie name variable from db fetched details and remove ''*/''; ?>">

            <label for="genre" class="form-label">Genre:</label>
            <select id="genre" name="genre" class="form-input" required>
                <option value="Adventure" <?php //echo (/* genre */ == 'Adventure') ? 'selected' : ''; ?>>Adventure</option>
                <option value="Horror" <?php //echo (/* genre */ == 'Horror') ? 'selected' : ''; ?>>Horror</option>
                <option value="Sci-Fi" <?php //echo (/* genre */ == 'Sci-Fi') ? 'selected' : ''; ?>>Sci-Fi</option>
                <option value="Kids" <?php //echo (/* genre */ == 'Kids') ? 'selected' : ''; ?>>Kids</option>
                <option value="Comedy" <?php //echo (/* genre */ == 'Comedy') ? 'selected' : ''; ?>>Comedy</option>
                <option value="Anime" <?php //echo (/* genre */ == 'Anime') ? 'selected' : ''; ?>>Anime</option>
            </select>

            <label for="watched" class="form-label form-checkbox">
                <input type="checkbox" id="watched" name="watched" value="<?php echo /* Write watched name variable from db fetched details and remove false*/FALSE; ?>"> Watched
            </label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="form-button">Save</button>
        </form>
    </div>
</body>
</html>