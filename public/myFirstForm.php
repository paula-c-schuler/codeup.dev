<!-- EXERCSE COMPLETE -->
<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<html>
<head>
	<title>My First Form</title>
</head>
<body>
<form method="POST" action="/myfirstform.php">
    
    <h3>Checkboxes</h3>
    <p>What operating systems have you used?
        <label> <input type="checkbox" id="os1" name="os[]" value="linux" > Linux
        </label>
        <label> 
            <input type="checkbox" id="os2" name="os[]" value="OS X"> OS X
        </label>
<h3>Compose an Email</h3>
    </p>
        <label for="recipient">To</label>
        <input type="text" id="recipient" name="recipient" placeholder="To Who?">
    <p>
        <label for="sender">From</label>
        <input type="text" id="sender" name="sender" placeholder="From Who?">
    </p>
    <p><label for="subject">Subject Line</label>
        <input type="text" id="subject" name="subject">
    </p>
    <p>
        <label for="email_body">Email Body</label>
        <textarea type="text" id="email_body" name="email_body"></textarea>
    </p>
        <label for="carbon_copy">Carbon Copy</label>
        <input type="checkbox" id="carbon_copy" name="carbon_copy" value="yes" checked>
        <label for="carbon_copy">Yes, send a copy.</label>
    </p>
    <h3>Multiple Choice Text</h3>
    <p>What is your favorite color?
    <p>
        <label>
            <input type="radio" id="fav_color1" name="favorite_color" value="red">RED</label>
    </p>
        <label>
            <input type="radio" id="fav_color2" name="favorite_color" value="blue">BLUE</label>
    </p>
        <label>
            <input type="radio" id="fav_color3" name="favorite_color" value="green">GREEN</label>
    </p>

    <p>
        <h3>Which is your pet?</h3>  
    </p>
    <p>  
        <label> 
            <input type="radio" id="fav_pet1" name="fav_pet" value="dog">Dog</label>
    </p>
        <label> 
            <input type="radio" id="fav_pet2" name="fav_pet" value="cat">Cat</label>
    <p>
        <label>
            <input type="radio" id="fav_pet3" name="fav_pet" value="fish">Fish</label>
    </p>

    <h3>Select Your Option for Fruit</h3>
    <p>
        <label for="favorite_fruit">Favorite Fruit</label>
        <select id="favorite_fruit" name="favorite_fruit" >
            <!-- This helps create a blank section (disabled selected) for users who don't want fruit. -->
            <option disabled selected>Select your favorite fruit</option>
            <option>Apple</option>
            <option>Banana</option>
            <option>Orange</option>
            <option>Pineapple</option>
        </select>
    </p>
    <p>
        <h3><strong>Multiselect Your Fruit</strong></h3>
    </p>
    <p>
        <label for="favorite_fruit">Favorite Fruit</label>
        <select id="favorite_fruit" name="favorite_fruit[]" multiple>
            <option disabled selected>Select your favorite fruit</option>
            <option>Apple</option>
            <option>Banana</option>
            <option>Orange</option>
            <option>Pineapple</option>
        </select>
    </p>
    <p>
    <h3>Select Testing</h3>
        <label for="dominant_hand">Are you left-handed?</label>
            <select id="dominant_hand" name="dominant_hand">
                <option value="yes" selected>Yes</option>
                <option value="no">No</option>
    </p>
    <p><br>
        <input type="submit">
    <p>


    </p>
</form>
</body>
</html>