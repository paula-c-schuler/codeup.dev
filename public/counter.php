<?php

// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController() 
{
    // Initialize an empty data array.
    //GET is a super variable and does not need to be passed. 
    if (!isset($_GET['counter'])) {
        $counter = 0;
        
    } else {
        $counter = $_GET['counter'];
    }

    // Add data to be used in the html view.
    $data['counter'] = $counter;
    // Return the completed data array.
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());


// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!doctype html>
<html>
    <head>
        <style type="text/css">
            .links {
                background-color: #ECE8DB;
                height: 100px;
                /*width: 100%;*/
                margin-top: 25px;
                text-align: center;
                /*padding: 10%;*/
                font-size: large;
            }
            h2 {
                text-align: center;
            }
            .box {
                background-color: #DAF5F5;
                margin-left: 200px;
                margin-right: 200px;
                text-align: center;
                padding: 10%;
            }
            
    </style>
        <title>PHP + HTML</title>   
    </head>
    <body>
        <div class="container">
            <!-- NTS: VAR DUMP GIVES ME GET REQUEST RESULTS -->
            <? var_dump($_GET);?>
            <div class="box">
            <!-- VARIABLE COUNTER -->
                <h2 class="counter">The Counter Says:  <?= $counter ?></h2>

                <div class="links">
                    <!-- ? NOTES START OF REQUEST; COUNTER IS key, UP is value -->
                    <a href="counter.php?direction=up&counter=<?=$counter+1?>">Up</a>
                </div>
                <div class="links">
                    <!-- ? NOTES START OF REQUEST; COUNTER IS key, DOWN is value -->
                    <a href="counter.php?direction=down&counter=<?=$counter-1?>">Down</a>
                </div>
            </div>
        
        </div>
    </body>
</html>