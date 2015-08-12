/**
 * 
 * @returns {undefined}
 */
function writeViaInnerHTML()
{
    document.getElementById("java").innerHTML = "THIS CAME FROM THE WRITE VIA INNER HTML FUNCTION";
}

/**
 * 
 * @returns {undefined}
 */
function multiplier() {
    var text;
    var product;
    var operandA = document.getElementById('multA').value;
    var operandB = document.getElementById('multB').value;

    if (operandA == null || operandA < 0 || operandA > 100 || operandB == null || operandB < 0 || operandB > 100)
    {
        text = "ERROR: Please enter a number between 0 and 100.";
        product = "Not valid";
    }
    else {
        product = operandA * operandB;
        text = "";
    }
    document.getElementById('errorText').innerHTML = text;
    document.getElementById('product').innerHTML = product;
}

function sum() {
    var textAdd;
    var sum;
    var operandA = document.getElementById('addA').value;
    var operandB = document.getElementById('addB').value;

    if (operandA == null || operandA < 0 || operandA > 100 || operandB == null || operandB < 0 || operandB > 100)
    {
        textAdd = "ERROR: Please enter a number between 0 and 100.";
        sum = "Not valid";
    }
    else {
        sum = operandA * operandB;//THIS IS CONCATENATING STRINGS AND NOT ADDING TWO INTEGERS.
        textAdd = "";
    }
    window.alert(sum);
}


/**
 * 
 * @returns {undefined}
 */
function changeFont() {
    document.getElementById('fontTest').style.fontSize = "64px";
}