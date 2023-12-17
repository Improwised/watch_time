<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Watch Time</title>
</head>
<body>
    <?php include "inc/header.php";?>
    <div>
        <div class="half-width">
            <div class='watch-item-section'>
                <h2 class="light-gray">Watch List</h2>
                <a href='pages/add.php' class='item-button'><span>Add Item</span></a>
            </div>
                        
            <div class="movie-cards-container">
                <?php
                /* Exercise-2: Define array called movie
                   - Movied should Associative array and it shoud contains id, name, genre as key
                   - If you want any help demo is given for watched section
                */

                // Loop 
                /* Exercise-3: 
                   - Rename movie to movies and make movie as array of movie associative arrays
                   - Create foreach loop on that array
                   - demo is given for watched section
                */
                // open the foreach loop 
                    if (isset($movie['name']) || isset($movie['genre'])){
                        echo '<div class="movie-card">
                        <div class="movie-card-header">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div class="movie-card-content">
                            <h3>' . /* Write Movie Name*/ '</h3>
                            <p>Genre: '. /* Write Movie Genre*/ '</p>
                        </div>
                        <div class="movie-card-buttons">
                            <button class="watched-btn">Watched</button>
                            <button class="delete-btn">Delete</button>
                        </div>
                        </div>';
                    }
                // close the for loop
                ?>
            </div>
        </div>
        <div class="half-width-wib"><h2 class="light-gray">Already Watched</h2>
        <div class="movie-cards-container">
                <?php
                $movies = [
                    ["id"=>1, "name" => "Pirates of The carrabian", "genre" => "Adventure"],
                    ["id"=>2, "name" => "One Piece", "genre" => "Anime"]
                ];

                foreach ($movies as $movie) {
                    echo '<div class="movie-card">
                    <div class="movie-card-header">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="movie-card-content">
                        <h3>' . $movie["name"] . '</h3>
                        <p>Genre: ' . $movie["genre"]. '</p>
                    </div>
                    <div class="movie-card-buttons">
                        <button class="watched-btn">Unwatch</button>
                        <button class="delete-btn">Delete</button>
                    </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- <?php include "inc/footer.php";?> -->
</body>
</html>