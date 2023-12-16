<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Add Watchlist Item</title>
</head>
<body>
    <?php include '../inc/header.php'; ?>
    <div class="form-pre-container">
        <form id="movieForm" class="form-container" action="../back/process_movie.php" method="post">
            <label for="movieName" class="form-label">Movie Name:</label>
            <input type="text" id="movieName" name="movieName" class="form-input">

            <label for="genre" class="form-label">Genre:</label>
            <select id="genre" name="genre" class="form-input" required>
                <option value="Adventure">Adventure</option>
                <option value="Horror">Horror</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Kids">Kids</option>
                <option value="Comedy">Comedy</option>
                <option value="Anime">Sci-Fi</option>
            </select>

            <label for="watched" class="form-label form-checkbox">
                <input type="checkbox" id="watched" name="watched"> Watched
            </label>

            <button type="submit" class="form-button">Add Movie</button>
        </form>
    </div>
</body>
</html>