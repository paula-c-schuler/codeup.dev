




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
var title = 'Blog again';

var author = 'Isaac Castillo';

var category = "development";
var tags = 'web development';

var post = '<strong>lorem ipsum</strong>';

var postTitle = document.getElementById('postTitle');
postTitle.innerHTML = title;

var postAuthor = document.getElementById('postAuthor');
postAuthor.innerHTML = author;

var postContent = document.getElementById('postContent');
postContent.innerHTML = post;



// title
// date - author - category
// tags: web, design, html
// image - post

// title
// date - author - category
// tags: web, design, html
// post
// 	</script>