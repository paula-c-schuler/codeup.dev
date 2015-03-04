// *************** WEATHER API PRACTICE ********************
//FIRST PORTION NOTE USED FOR FOLLOWING EXERCISES ON SAME FILE, 
//REFER TO THREE-DAY FORECAST FOR ACTIVE WORK ON THE HTML FILE.


(function() {
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
    fString = "";
    
    var forecast = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=29.423017&lon=-98.48527&cnt=3&mode=json');

    forecast.done(function(data) {
        // console.log(data);
        
        fString += '<div class="row">';
//I NEED TO FIGURE OUT HOW TO ADJUST THE SIZE OF THIS ROW, TOO HIGH
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
        }

        fString += "</div>";
        // console.log(fString);

        $("#hold-forecasts").html(fString);
         
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
    })
    
    google.maps.event.addListener(marker, "dragend", function(event) { 
      var lat = event.latLng.lat(); 
      var lng = event.latLng.lng(); 
      console.log(lat);
      console.log(lng);
    }); 

    

    

    });           
    forecast.fail(function(){
        console.log("ajax fail");
    });

})();





