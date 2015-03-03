// ************ BLOG EXERCISE TWO -- JSON DATA IN JQUERY  ************//
//title, content or posts, categories array, date

// THIS ANONYMOUS FUNCTION IS USED TO JUST PROTECT THE DATA, THE ACTIONS.
// THE FUNCTIONS, ETC WOULD DO THE SAME THING IF NOT WRAPPED INSIDE THE 
// SELF-INVOKING FUNCTION. CREATES LOCAL SCOPE.
(function() {
    // TODO: Create an ajax GET request for /data/blog_ajax_jquery.json
    var jsonString = "";
    var jsonInsert = $("#posts");
    var jsonPosts = $.ajax("/data/blog.json");

    jsonPosts.done(function(data){
        console.log(data);
        console.log("data done");
//for the timing to be helpful,
//the data.each must be inside the .done function.
        $(data).each(function(index,element){
        jsonString += "<h2>" + element.title + "</h2>";
        jsonString += "<h3>" + element.date + "<h3>";
        jsonString += "<p>" + (element.content || element.posts) + "</p>";
        jsonString += "<h4>" + element.categories.join(", ") + "</h4>";
        console.log(jsonString);
        $("#posts").html(jsonString);
        });
    });
    jsonPosts.fail(function(){
        console.log("failed");
    });
    
})();
