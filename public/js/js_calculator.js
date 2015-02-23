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
var clearFields = function (event){
    document.getElementById("operand").value = "";
    document.getElementById("fieldLeft").innerHTML = "";
    document.getElementById("fieldRight").innerHTML = "";
    console.log("i heard you. clear.");
} 

// TRIED TO HAVE ONE FUNCTION FOR ALL FOUR,
//BUT settled on one function for each operator
var operandListener = function (event){
    var operand = this.value;
    document.getElementById("operand").value = operand;
    console.log(operand.value);
    console.log("Hearing");
        } 

var subtractListener = function (event){
    var operand = this.value;
    document.getElementById("operand").innerHTML = operand;
    console.log(this.value);
    console.log("Hearing subtract");
}
var multiplyListener = function (event){
    var operand = this.value;
    document.getElementById("operand").innerHTML = operand;
    console.log(this.value);
    console.log("Hearing multiply");
}       
var divideListener = function (event){
    var operand = this.value;
    document.getElementById("operand").innerHTML = operand;
    console.log(this.value);
    console.log("Hearing divide");
} 

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
var btn1Listener = function (event){
    input = this.value;
    document.getElementById("fieldLeft").value = input;
    console.log(fieldLeft.value);
    console.log("Hearing 1");
}
//THIS DOES THE SAME AS ABOVE and adds more numbers
//BUT VALUE LOGS AS UNDEFINED
var btnListener = function (event){
    document.getElementById("fieldLeft").value += this.value
    console.log(fieldLeft.value); 
}

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
var btn1Listener = function (event){
    for (var i = 0; i < 5; i++){
        fieldLeft[i] += "1";
        console.log(fieldLeft.value + "left value");
    }
}

var equalListener = function (event){
    console.log("hearing equal");
    if (operand.value == "+"){
        console.log(fieldLeft.value);
        result = fieldLeft.value + fieldRight.value;
        console.log("=" + result);
    }
}

btnEqual = document.getElementById("btnEqual");
btnClear = document.getElementById("btnClear");
btnAdd = document.getElementById("btnAdd");
btnSubtract = document.getElementById("btnSubtract");
btnMultiply = document.getElementById("btnMultiply");
btnDivide = document.getElementById("btnDivide");
btn1 = document.getElementById("btn1");
btn2 = document.getElementById("btn2");
btn3 = document.getElementById("btn3");


btnEqual.addEventListener("click", equalListener, false);
btnClear.addEventListener("click", clearFields, false);
btnAdd.addEventListener("click", operandListener, false);
btnSubtract.addEventListener("click", subtractListener, false);
btnMultiply.addEventListener("click", multiplyListener, false);
btnDivide.addEventListener("click", divideListener, false);
btn1.addEventListener("click", btn1Listener, false);
// btn2.addEventListener("click", numListener, false);
// btn3.addEventListener("click", numListener, false);

// var numListener = function (event){
//           for (i = 0; i < .length; i++){
//             var dbid = listItems[i].attributes["data-dbid"].value;
//             if ([i] % 2 !== 0){
//                 listItems[i].style.color = "red";
//             } 
//             if (dbid == 1){
//                 listItems[i].style.color = "green";
//             }
//         }
//         }
//         var makeInput1 = function (event){
//           
//         }











