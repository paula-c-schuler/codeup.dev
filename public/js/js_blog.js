var blog = [
    {
        "title": "This is a title for this",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "image": "http://www.someimagehere.com/image.jpg",
        "tags": [
            "web",
            "design",
            "html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    },
    {
        "title": "This is a title for this",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "tags": [
            "web",
            "design",
            "html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    }
];
// var title = 'Blog again';

// var author = 'Isaac Castillo';

// var category = "development";
// var tags = 'web development';

// var post = '<strong>lorem ipsum</strong>';

// var postTitle = document.getElementById('postTitle');
// postTitle.innerHTML = title;

// var postAuthor = document.getElementById('postAuthor');
// postAuthor.innerHTML = author;

// var postContent = document.getElementById('postContent');
// postContent.innerHTML = post;

// console.log(blog[0])


var postString = "";
var importPost = document.getElementById("postString");


function isWholePost(){
    for (var i = 0; i < blog.length;i++){
        postString += '<h2>' + blog[i].title + '</h2>';
        postString += '<p>' + blog[i].post + '</p>'; 
        postString += '<p>' + blog[i].date;
        postString += '<span>' + ' by ' + blog[i].author + ' </span>';
        postString += '<span>' + blog[i].category + '</span>' + ' </p>';
        var tags = '';
        blog[i].tags.forEach(function (element,index, array) {
            tags += element + ", ";
        });
        postString += '<h3>' + tags + '</h3>';
        postString += '<p>' + blog[i].post + '</p>';
        // var resultString = '';
        // return resultString;
        } 
    }

isWholePost(blog);
console.log(postString);
importPost.innerHTML = postString;




// string += '<h2>' + title + </h2>;
// repeat for each html want added etc 
// title
// date - author - category
// tags: web, design, html
// image - post


