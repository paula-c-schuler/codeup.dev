// *************** WEATHER API PRACTICE ********************
//FIRST PORTION NOTE USED FOR FOLLOWING EXERCISES ON SAME FILE, 
//REFER TO THREE-DAY FORECAST FOR ACTIVE WORK ON THE HTML FILE.


(function(){
    // weatherHtml = '';

    // var currentWeather = $.ajax('http://api.openweathermap.org/data/2.5/weather?q=San+Antonio,TX');
  
    // currentWeather.done(function(data) {
    //     console.log(data);
    //     var currentTemp = "<p>" + "Current temp: " + parseInt((data.main.temp -273.15) * 1.8 + 32) + "°F</p>";
    //     var icon = '<img src="http://openweathermap.org/img/w/' + data.weather[0].icon + '.png">';
    //     var windSpeed = "<p>" + "Wind speed: " + data.wind.speed + "</p>";
    //     var humidity = "<p>" + "Humidity: " + data.main.humidity + "</p>";
    //     var pressure = "<p>" + "Pressure: " + data.main.pressure + "</p>";

    //     var weatherToDisplay = currentTemp + icon + windSpeed + humidity + pressure;
    //     $("#weather").html(weatherToDisplay);
    // });

//****************** FOR THE THREE-DAY FORECAST ***************//
//***** LEARNED .DONE FUNCTIONS IN AJAX REQUIRE REQUIRE REQUIRE
//***** AN ANONYMOUS FUNCTION. BUT -- THE ANONYMOUS FUNCTION
//***** CAN BE USED TO PASS DATA FROM MANY AJAX TO ONE MAJOR FUNCTION//
    fString = "";
    newCity = "";
    gotCity = "";
    userForecast = [];
    newCity = function(lat,lng){
        var gotCity = 'http://api.openweathermap.org/data/2.5/forecast/daily?lat=' + lat + '&lon=' + lng + '&cnt=3&mode=json';
        console.log(gotCity + " is gotCity");
        return gotCity;
    }
//THIS IS THE BUTLER THAT GETS CALLED BY THE OTHER SETS OF DATA
    function everyForecast(data){
        console.log("hi");
        console.log(data);

        fString += '<div class="row">';

        for (var i = 0; i < data.list.length; i++) {
            var hiTemp = parseInt((data.list[i].temp.day -273.15) * 1.8 + 32) + "°";
            var loTemp = parseInt((data.list[i].temp.eve -273.15) * 1.8 +32) + "°";
            // console.log(hiTemp + " is hiTemp");
            var icon = '<img src="http://openweathermap.org/img/w/' + data.list[i].weather[0].icon + '.png">';
            // console.log(icon + " is icon");
            var main = data.list[i].weather[0].main;
            // console.log(main + " is main weather");
            var description = data.list[i].weather[0].description;
            // console.log(description + " is description");
            var humidity = data.list[i].humidity;
            var windSpeed = data.list[i].speed;
            var pressure = data.list[i].pressure;
            // console.log(humidity + ", " + windSpeed + ", " + pressure + " are obtained");
            
            fString += '<div class="col-md-4">';
            fString += "<span><strong>" + hiTemp + "/" + loTemp + "</strong></span>";
            // console.log(fString);
            fString += "<p>" + icon + "</p>";
            // console.log(fString);
            fString += "<p><strong>" + main + "</strong>: " + description;
            // console.log(fString);
            fString += "<p><strong>" + "Humidity</strong>: " + humidity;
            // console.log(fString);
            fString += "<p><strong>" + "Wind</strong>: " + windSpeed;
            // console.log(fString);
            fString += "<p><strong>" + "Pressure</strong>: " + pressure;
            fString += "</div>";
            fString += "</div>";
            // console.log(fString);
        }
        $("#hold-forecasts").html(fString);

        //******* MAP IS INSIDE THE .DONE FUNCTION **********************
        // map was originally inside the .done singular function
        //******* MAP BEGINS HERE WITH API KEY ON HTML PAGE *************
        //is the listening device inside the butler? 
        //******* LISTENING FOR PIN DRAG DRAWS LONGITUDE/LATITUDE, ******
        //******* WHICH IS POPULATED INTO A NEW URL STRING SO THAT ******
        //******* A USER AJAX REQUEST CAN BE MADE ***********************
        //**********DATA FROM THE USERS AJAX IS RUN THROUGH .DONE********
        //**********THE .DONE CALLS THE MAIN BUTLER FUNCTION ************
        //******* WEATHER FOR THE NEW PIN LOCATION IS DISPLAYED *********
        //english says: 
        //SET UP THE MAP
        //ENABLE DRAGGING THE PIN BY A USER
        //WITH DUPLICATABILITY:
            //CAPTURE LAT AND LONGITUDE FOR THE NEW PIN LOCATION
            //PUT THAT DATA INTO THE AJAX REQUEST
            //send a new ajax get, under different name
            //spin through the objects and obtain data
            //to repopulate the weather forecast in a repeatable manner.

        var geocoder = new google.maps.Geocoder();
         
        var mapOptions = {
            zoom: 7,
            center: { lat: 29.4284595, lng: -98.492433 }
        }   
        
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        var marker = new google.maps.Marker ({
           position : map.getCenter(),
           draggable: true,
           map : map
        });
        
        google.maps.event.addListener(marker, "dragend", function(event) { 
            var lat = event.latLng.lat(); 
            var lng = event.latLng.lng(); 
            console.log(lat);
            console.log(lng);
            var requestString = newCity(lat,lng);
            var userForecast = $.ajax(requestString);

          // calls ajax
          // loads above everyForecast(data);
            var userForecast = $.ajax(gotCity);
            console.log("second ajax working");

        userForecast.done(function(data){
            console.log(data + " is userForecast data");
            everyForecast(data);
            console.log("userForecast done reached");
        });

        userForecast.fail(function(){
            console.log(" user ajax fail");
        });
        }); 
    // });
    }
//THE ORIGINAL FORECAST AJAX AND .DONE
    var originForecast = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=29.423017&lon=-98.48527&cnt=3&mode=json');

    originForecast.done(function(data){
        everyForecast(data);
    });

    originForecast.fail(function(){
        console.log(" origin ajax fail");
    });

})();





