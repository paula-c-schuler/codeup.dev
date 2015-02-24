//NOTES ARE AT THE BOTTOM 

var buttons = document.getElementsByClassName("buttons");
//THE ABOVE LINE RETURNS AN ARRAY!!!!! ayiyiyi
//it says ELEMENTS PLURAL, hence the array

var spot1Holder = "";
var spot2Holder = "";
var operand = "";
var fieldLeft = document.getElementById("fieldLeft");
var fieldRight = document.getElementById("fieldRight");
var result = "";

//THIS ITERATION ADDS A LISTENER TO EVERY BUTTON
//MAKE IT < BUTTONS.LENGTH.  = IS ASSIGNING. 
for (var i = 0; i < buttons.length; i++){
    console.log("logging button" + buttons[i]);
    buttons[i].addEventListener("click", listener, false);
}

function listener (event){
    console.log("listened");
    console.log(this.value + "above the iffies");
    var value = this.value; 
    if (this.value === "c"){
        clearFields();
    }
    else if (this.value === "="){
        evaluateFields();
    }
    else if (isNaN(this.value)){
        console.log(this.value + " isn't number");
        operand = this.value;
        document.getElementById("operand").value = operand;
    }
    else if (operand != ""){
        console.log(this.value + " this is a number");
        fieldRight.value += this.value;
        console.log(fieldRight + " is fieldRight");
        // document.getElementById("fieldRight").value = fieldRight; 
    } else {
        console.log(this.value + " this is for fieldLeft");
        fieldLeft.value += this.value;
        console.log(fieldLeft + " is fieldLeft");
    }
} 
var clearFields = function (){
    document.getElementById("fieldLeft").value = "";
    document.getElementById("fieldRight").value = "";
    document.getElementById("operand").value = "";
    console.log("clearFields ran");
}
var evaluateFields = function(){
    console.log("found evaluateFields");
    console.log(fieldLeft.value + " is fieldLeft value");
    console.log(fieldRight.value + " is fieldRight value");
    operand = document.getElementById("operand");
    console.log(operand.value + " is operand value");
    if (operand.value == "+"){
        fieldLeft.value = parseInt(fieldLeft.value) + parseInt(fieldRight.value);
        fieldRight.value = "";
    } else if (operand.value == "-"){
        fieldLeft.value = parseInt(fieldLeft.value) - parseInt(fieldRight.value);
        fieldRight.value = "";
    } else if (operand.value == "*"){
        fieldLeft.value = parseInt(fieldLeft.value) * parseInt(fieldRight.value);
        fieldRight.value = "";
    } else if (operand.value == "/"){
        fieldLeft.value = parseInt(fieldLeft.value) / parseInt(fieldRight.value);
        fieldRight.value = "";
    }
}
    

//COMMENTS HAVE BEEN RETAINED AS I WORKED THROUGH THIS PROJECT
// TO AVOID DOING THE SAME "IT NO WORKIE" MORE THAN ONCE. 
//********************************************************
// class demo notes: 
// JAIME: She divided the button listeners by classes, 
// separated the numbers from operators. 
// Tip -/+ to make negative multiply by *= -1.
// Tip use eval ( parts of equation) to calculate 
// CSS looked like a real calc on a wood surface. 
// box shadow three pixel notes and then array of colors 
// buttons push down when clicked
// numbers look like old school calculator numbers, font called "digital 7"
// buttons set to relative position.
// KEENAN: used loop through buttons to load listening element
// OTHER GUY: Added fun graphics to background including puzzled woman,
//which changed to happy dog on equal. 
//*******************************************************


// DONE---TODO: MAKE OPERATORS VALUE PASS TO FIELDS 
// create action to happen after click on operands
// create button variable
// create listener action call
// test

// TODO: MAKE CLEAR BUTTON DO ITS JOB
// create action on clear click
// test

// DONE---TODO: 
// create action to happen after click on numbers
// create button variables
// create listener call
// test, verify type of data on all fields
//

// DONE---TODO: GET NUMBER BUTTONS IN PROPER FIELDS 1 OR 3
// test, verify type of data 
// 
// TODO: EQUAL BUTTON CALCULATES THE FIELDS AND RETURNS TO FIELD 1
// create action on equal click--
    //submit button with display of equal sign? 
// test



// var fieldLeft = "";
// var fieldLeft1 = "";
// var fieldLeft2 = "";
// var fieldRight = "";
// var result = "";
// var secondOperand = "";
// var arrayFields = [fieldLeft,operand,fieldRight];


//Does not work. 
//next time, changed .innerHTML to .value
//still testing
// var clearFields = function (event){
//     document.getElementById("operand").value = "";
//     document.getElementById("fieldLeft").value = "";
//     document.getElementById("fieldRight").value = "";
//     console.log("i heard you. clear.");
// } 

// TRIED TO HAVE ONE FUNCTION FOR ALL FOUR,
//BUT settled on one function for each operator
// var operandListener = function (event){
//     var operand = this.value;
//     document.getElementById("operand").value = operand;
//     console.log(operand.value);
//     console.log("Hearing");
//         } 

// var subtractListener = function (event){
//     var operand = btnSubtract.value;
//     document.getElementById("operand").value = operand;
//     console.log(this.value);
//     console.log("Hearing subtract");
// }
// var multiplyListener = function (event){
//     // var operand = this.value; DID WORK, NOT ANYMORE
//     var operand = btnMultiply.value;
//     document.getElementById("operand").value = operand;
//     console.log(this.value);
//     console.log("Hearing multiply");
// }       
// var divideListener = function (event){
//     // var operand = this.value; NO LONGER WORKING
//     var operand = btnDivide.value;
//     document.getElementById("operand").value = operand;
//     console.log(this.value);
//     console.log("Hearing divide");
// } 
//WILL NOT POPULATE VALUE LIKE THE OPERAND DOES
// var numListener = function (event){
//     if (fieldLeft !== ""){
//         var fieldLeft = this.value;
//         fieldLeft.innerHTML = fieldLeft;
//         console.log(fieldLeft);
//         console.log("Heard number");
//     } 
// }

// var numListener = function (event){
//     console.log(this.value + "this value");
//     var input = this.value;
//     for (var i = 0; i < 5; i++)
//     console.log(input + "can get the value");
//     fieldLeft.value = input;
//     fieldLeft.text = input;
//     console.log(fieldLeft + "working");

// }
//     do (fieldLeft.value = fieldLeft + this.value)
//         while (var i = 0, i < 5; i++);   
// var numListener = function (event){
//         console.log(fieldLeft);
//         console.log(this.value + "hearing");
//     }  
// }

//THIS ONE WORKS IN APPEARANCE, but value logs as undefined
// var btn1Listener = function (event){
//     input = btn1.value;
//     document.getElementById("fieldLeft").value = input;
//     console.log(fieldLeft.value);
//     console.log("Hearing 1");
// }
//THIS DOES THE SAME AS ABOVE and adds more numbers
//BUT VALUE LOGS AS UNDEFINED
// var btnListener = function (event){
//     document.getElementById("fieldLeft").value += this.value
//     console.log(fieldLeft.value); 
// }
//SAME AS ABOVE: If using "1" or 1, value logs as undefined
// var btn1Listener = function (event){
//     for (var i = 0; i < 5; i++){
//         document.getElementById("fieldLeft").value += "1";
//         console.log(fieldLeft.value + "left value");
//     }
// }
//THIS RESULTED IN:
//* FIVE COUNTS WITH EACH CLICK
//* WHICH DID NOT SHOW UP IN fieldLeft as text
//* and again logged a value of undefined. 
// var btn1Listener = function (event){
//     for (var i = 0; i < 5; i++){
//         fieldLeft[i] += "1";
//         console.log(fieldLeft.value + "left value");
//     }
// }
// var equalListener = function (event){
//     console.log("hearing equal");
//     if (operand.value == "+"){
//         console.log(fieldLeft.value);
//         result = fieldLeft.value + fieldRight.value;
//         console.log("=" + result);
//     }
// }





