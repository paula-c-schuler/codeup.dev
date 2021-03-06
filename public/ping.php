<?php
// EXERCISE 7.1.3 PING PONG functional, not pretty
// EXERCISE 7.3 STATIC inside CLASSES - COMPLETE ***

require_once 'input.php';

function pageController() {
    // Initialize an empty data array.
    $data = [];

    require 'functions.php'; 
    // Add data to be used in the html view. Checks value, if ball swung at.
    if (!isset($_GET['ball'])) {
        $counter = '0';
        $message = "Hit the ball, if you can!";
    // Records the hit, sends a message, updates score.
    } elseif ($_GET['ball'] == 'hit') {
        $counter = $_GET['counter'];
        $message = "Hit!";
    // Records the miss, sends a message, zeroes the score.
    } elseif ($_GET['ball'] == 'miss') {
        $message = 'Bummer, Game Over';
        $counter = '0';
    }
    // Sets up the array for extraction
    $data['counter'] = $counter;
    $data['message'] = $message;
    
    return $data;   
}

extract(pageController());

?>
<!doctype html>
<html>
    <head>
        <title>PING.php</title>
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
            <a href="pong.php?ball=hit&counter=<?php echo $counter+1; ?>">HIT</a>
            <!-- Player misses, score starts over -->
            <a href="pong.php?ball=miss&message=miss ?>">Miss</a>

        </div>
    </body>
</html>