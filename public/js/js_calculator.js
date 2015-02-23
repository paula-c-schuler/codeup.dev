// Q:  numbers or strings?  Apparently strings

// DONE---TODO: MAKE OPERATORS VALUE PASS TO FIELDS 
// create action to happen after click on operands
// create button variable
// create listener action call
// test
// DONE---TODO: MAKE CLEAR BUTTON DO ITS JOB
// create action on clear click
// test
// TODO: 
// create action to happen after click on numbers
// create button variables
// create listener call
// test, verify type of data on all fields
//
// TODO: GET NUMBER BUTTONS IN PROPER FIELDS 1 OR 3
// 
// test, verify type of data
// 
// 
// TODO: EQUAL BUTTON CALCULATES THE FIELDS AND RETURNS TO FIELD 1
// create action on equal click--
	//submit button with display of equal sign? 
// test



var fieldLeft = "";
// var fieldLeft1 = "";
// var fieldLeft2 = "";
var fieldRight = "";
var result = "";
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

    // for (i = 0; i < arrayFields.length; i++){
    //     var dbid = listItems[i].attributes["data-dbid"].value;
    //     console.log(arrayFields.value);

    //     if ([i] < "0"){
    //         listItems[i].style.color = "red";
    //     } 
    //     if (dbid == 1){
    //         listItems[i].style.color = "green";
    //     }
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

// var numListener = function (event){
//     do (fieldLeft.value = fieldLeft + this.value)
//         while (var i = 0, i < 5; i++);   
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

//FROM CLASS Q&A: 
var buttons = document.getElementsByClassName("buttons");
//THE ABOVE LINE RETURNS AN ARRAY!!!!! ayiyiyi
//it says ELEMENTS PLURAL, hence the array
var spot1Holder = "";
var spot2Holder = "";
var operand = "";
var fieldLeft = document.getElementById("fieldLeft");
var fieldRight = document.getElementById("fieldRight");


//THIS ADDS A LISTENER TO EVERY BUTTON
//MAKE IT < BUTTONS.LENGTH.  = IS ASSIGNING. 
for (var i = 0; i < buttons.length; i++){
    console.log("logging button" + buttons[i]);
    buttons[i].addEventListener("click", listener, false);
}

function listener (event){
    console.log("listened");
    console.log(this.value + "above the iffies");
    var value = this.value; 
    if (isNaN(this.value)){
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

//     if(isNaN(this.value)){
//         console.log("listening");
//         console.log(this.value);
//         if (this.value == "+" ||
//             this.value == "-" ||
//             this.value == "*" ||
//             this.value == "/"){
//             document.getElementById("operand").value = this.value;
//             console.log(this.value + " hearing op button");
//             console.log(operand.value);
//         } else if (this.value == "c"){
//             console.log("clear is heard"); 
//             document.getElementById("fieldLeft").value = "";
//             document.getElementById("fieldRight").value = "";
//             document.getElementById("operand").value = "";
//         } 
//     }
//     else if (operand.value == false){
//         console.log(operand.value);
//         var input2Value;
//         input2Value = this.value;
//         spot2Holder += input2Value;
//         document.getElementById("fieldRight").value = spot2Holder;
//         console.log(spot2Holder + " is spot2Holder");
//     } else {
//         var inputValue;
//         inputValue = this.value;
//         spot1Holder += inputValue;
//         document.getElementById("fieldLeft").placeholder = spot1Holder;
//         console.log(spot1Holder + " is spot1Holder");
//     }
} 
    












