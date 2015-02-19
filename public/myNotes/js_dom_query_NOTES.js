EXERCISES AND NOTES LESSON 3.7.2 DOM EVENTS

<html>
<head>
    <title></title>
</head>
ADD AN EVENT LISTENER ______________________________________________
THE ORDER OF PARTS OF EVENT LISTENER SET UP IS IMPORTANT
DECLARE FUNCTION FIRST
THEN VARIABLE
THEN ADDEVENTLISTENER
<body>
    <button id="btn1">Click Me!</button>
    <script>

        // create a handler function
        var listenerFunctionVariable = function (eventName) {
            stuff happens;
        }

        // register the listener to handle clicks on btn1
        document.getElementById('btn1').addEventListener('click', listenerFunctionVariable, false);

    </script>
</body>
REMOVE THE EVENT LISTENER ___________________________________________
<body>
    <button id="btn1">Click Me!</button>
    <button id="btn2">Remove Event Listener</button>
    <script>

        var listener = function (event) {
            alert('You clicked the button!');
        }

        // add event listener to btn1
        var btn1 = document.getElementById('btn1');
        btn1.addEventListener('click', listener, false);

        var remover = function (event) {
            // remove event listener from btn1
            btn1.removeEventListener('click', listener, false);
            console.log('Event listener removed.');
        }

        // add event listener to btn2
        var btn2 = document.getElementById('btn2');
        btn2.addEventListener('click', remover, false);

    </script>
</body>
</html>
</html>