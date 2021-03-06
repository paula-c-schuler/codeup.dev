<?php
// EXERCISE 7.2 COMPLETE - ADDED REQUIRE AND FUNCTIONS FROM FUNCTIONS.PHP FILE
// EXERCISE 7.3.2 STATIC inside CLASSES, usng Input::has and Input::get

require_once '../Input.php';

function pageController() {
    // Initialize an empty data array.
    $data = [];

    //  use "require" to make more modular flexible code 
    require 'functions.php'; 

    // Add data to be used in the html view.
    // Checks value, if ball has ever been swung at.

    if (Input::has('ball')) {
        $counter = '0';
        $message = "Hit the ball, if you can!";

    // Records the hit, sends a message, updates score.

    } elseif (Input::get('ball') == 'hit') {
        $counter = $_GET['counter'];
        $message = "Hit!";

    // Records the miss, sends a message, zeroes the score.

    } else {
        $message = 'Bummer, Game Over';
        $counter = '0';
    }

    // Sets up the array
    $data['counter'] = $counter;
    $data['message'] = $message;
    return $data;   
}

extract(pageController());

?>
<!doctype html>
<html>
    <head>
        <title>PONG.php for GET request exercise</title>
<style type="text/css">
    body {
        text-align: center;
    }
    div {
        text-align: center;
    }
</style>   
    </head>
    <body>
        <!-- Messages to player on screen -->
        <h1><?php echo $message; ?></h1>
        <!-- Score Counter -->
        <h2> <?php echo $counter ?> </h2>
        
        <div class="container">
            <!-- Player hits the ball, scores a point -->
            <a href="ping.php?ball=hit&counter=<?php echo $counter; ?>">HIT</a>
            <!-- Player misses, score starts over -->
            <a href="ping.php?ball=miss&message=miss ?>">Miss</a>

        </div>
    </body>
</html>



