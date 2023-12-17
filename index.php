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
                /* Exercise-3: Define array called movie
                   - Movied should Associative array and it shoud contains id, name, genre as key
                   - If you want any help demo is given for watched section
                */

                //_______________Give It a try after exercise 6_______________
                // $movies = [];
                // $selectQuery = "SELECT * FROM watch_list WHERE watched=false";
                // $conn = getConnection('.env');
                // $result = pg_query($conn, $selectQuery);
                // while ($row = pg_fetch_assoc($result)) {
                //     // Process each row
                //     array_push($movies, $row);
                // }                
                // pg_close($conn);

                // Loop 
                /* Exercise-4: 
                   - Rename movie to movies and make movie as array of movie associative arrays
                   - Create foreach loop on that array
                   - demo is given for watched section
                */
                // open the foreach loop 
                    /* Exercise-2:
                       - write condition that if found movie array's name and genre, then and then only this echoed
                       - start if statement
                    */
                        echo '<div class="movie-card">
                        <div class="movie-card-header">
                            <a href=\'/pages/edit.php?id' . /* Write movie id */'\'><img src=\'assets/images/edit.png\' alt=\'edit\' height=\'30px\' width=\'30px\' /></a>
                        </div>
                        <div class="movie-card-content">
                            <h3>' . /* Write Movie Name*/ '</h3>
                            <p>Genre: '. /* Write Movie Genre*/ '</p>
                        </div>
                        <div class="movie-card-buttons">
                            <a href=\'back/watch_toggle.php?id='. /*write movie id */ '&watch_value=true\' class="item-button-class"><button class="watched-btn">Watched</button></a>
                            <a href=\'back/delete.php?id='. /*write movie id */ '\' class="item-button-class"><button class="delete-btn">Delete</button></a>
                        </div>
                        </div>';
                    // close if statement
                // close the for loop
                ?>
            </div>
        </div>
        <div class="half-width-wib"><h2 class="light-gray">Already Watched</h2>
        <div class="movie-cards-container">
                <?php
                require 'db/conn.php';

                $movies = [
                    ["id"=>1, "name" => "Pirates of The carrabian", "genre" => "Adventure"],
                    ["id"=>2, "name" => "One Piece to earth where gardner know what is doing teller to shifter", "genre" => "Anime"]
                ];
                
                /* Exercise - 6
                   - Write select query with condition watched = true, so we can get movies that are watched
                */
                // $movies = [];
                // $selectQuery = "______Write Here______";
                // $conn = getConnection('.env');
                // $result = pg_query($conn, $selectQuery);
                // while ($row = pg_fetch_assoc($result)) {
                //     // Process each row
                //     array_push($movies, $row);
                // }                
                // pg_close($conn);

                foreach ($movies as $movie) {
                    echo '<div class="movie-card">
                    <div class="movie-card-header">
                        <a href=\'/pages/edit.php?id=' . $movie["id"] .'\'><img src=\'assets/images/edit.png\' alt=\'edit\' height=\'30px\' width=\'30px\' /></a>
                    </div>
                    <div class="movie-card-content">
                        <h3>' . $movie["name"] . '</h3>
                        <p>Genre: ' . $movie["genre"]. '</p>
                    </div>
                    <div class="movie-card-buttons">
                        <a href=\'back/watch_toggle.php?id='. $movie["id"] .'&watch_value=false\' class="item-button-class"><button class="watched-btn">Unwatch</button></a>
                        <a href=\'back/delete.php?id='. $movie["id"] .'\' class="item-button-class"><button class="delete-btn">Delete</button></a>
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