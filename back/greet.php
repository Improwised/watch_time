<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['greetButton'] === "greet") {
        // greet();
        header("refresh:0; ../index.php");
        exit();
    }
}

/* Exercise - 5 
- Write greet() function
- It will echo alert message in script tags
- Uncomment the greet in request handlers
- Try to click out greet button in home page
*/
?>