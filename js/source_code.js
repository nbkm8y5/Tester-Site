/**
 *
 * @returns {undefined}
 */
function writeViaInnerHTML() {
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

    if (operandA == null || operandA < 0 || operandA > 100 || operandB == null || operandB < 0 || operandB > 100) {
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
    var operandA = document.getElementById('addA');
    var operandB = document.getElementById('addB').value;

    if (operandA.value == null || operandB == null) {
        textAdd = "ERROR: Please enter a number.";
        sum = "Not valid";
    }
    else {
        sum = parseInt(operandA.value) + parseInt(operandB);//THIS IS CONCATENATING STRINGS AND NOT ADDING TWO INTEGERS.
        textAdd ="";
    }

    document.getElementById('sum').innerHTML = sum;
}

/**
 *
 * @returns {undefined}
 */
function changeFont() {
    document.getElementById('fontTest').style.fontSize = "64px";
}

/**
 *
 */
function operandValidation() {
    var a = document.getElementById('a').value;
    var b = document.getElementById('b').value;
    var goodPattern = /[0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.]/;
    var badPattern = /[ `~!@#$%^&*()_+-={}|[;':",<>?\/]/;
    var operandAError = document.getElementById('operandAError');
    var operandBError = document.getElementById('operandBError');
    var postTester = document.getElementById('post_tester');

    if (!goodPattern.test(a) || !goodPattern.test(b)) {
        operandAError.innerHTML = 'Please enter numbers letters or periods only.';
        operandBError.innerHTML = 'Please enter numbers letters or periods only.';
        postTester.disabled = true;
    }
    else {
        operandAError.innerHTML = 'Ready for submission';
        operandBError.innerHTML = 'Ready for submission';
        postTester.disabled = false;
    }
}

/**
 * ALL THIS CAN BE ELIMINATED WITH HTML 5 MIN, MAX AND PATTERN INPUT ATTRIBUTES
 * @returns {boolean}
 */
function inputValidator() {
    var goodUserNamePattern = /[^0123456789abcdefghijklmnopqrstuvwxyz.]/ig;
    var userName = document.forms["sign_in"]["user_name"].value;
    if (goodUserNamePattern.test(userName)) {
        document.getElementById('userNameResponse').innerHTML = 'Please enter numbers, letters or periods only.';
        return false;
    }
    else if (userName.length < 6 || userName.length > 12) {
        document.getElementById('userNameResponse').innerHTML = 'Please keep username at least 6 characters and at most 12 characters.';
        return false;
    }

    var goodNamePattern = /[^abcdefghijklmnopqrstuvwxyz]/ig;

    var firstName = document.forms["sign_in"]["first_name"].value;

    if (goodNamePattern.test(firstName)) {
        document.getElementById('firstNameResponse').innerHTML = 'Please enter letters only.';
        return false;
    }
    else if (firstName.length < 2 || firstName.length > 25) {
        document.getElementById('firstNameResponse').innerHTML = 'Please keep first name at least 2 characters and at most 25 characters.';
        return false;
    }

    var lastName = document.forms["sign_in"]["last_name"].value;

    if (goodNamePattern.test(lastName)) {
        document.getElementById('lastNameResponse').innerHTML = 'Please enter letters only.';
        return false;
    }
    else if (lastName.length < 2 || lastName.length > 25) {
        document.getElementById('lastNameResponse').innerHTML = 'Please keep first name at least 2 characters and at most 25 characters.';
        return false;
    }

    var goodemailPattern = /[^0123456789abcdefghijklmnopqrstuvwxyz.-_@]/ig;

    var email = document.forms["sign_in"]["email"].value;

    if (goodemailPattern.test(email)) {
        document.getElementById('emailResponse').innerHTML = 'Please enter numbers, letters, hyphens, underscores or periods only.';
        return false;
    }

    var goodpasswordPattern = /[^0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()]/ig;

    var password = document.forms["sign_in"]["password"].value;

    if (goodpasswordPattern.test(password)) {
        document.getElementById('passwordResponse').innerHTML = 'Please enter numbers, letters, and the following special characters only: !@#$%^&*().';
        return false;
    } else if (password.length < 6 || password.length > 24) {
        document.getElementById('passwordResponse').innerHTML = 'Please keep password at least 6 characters and at most 24 characters.';
        return false;
    }
}

//Booleans can be objects (or primitive data treated as objects)
//Numbers can be objects (or primitive data treated as objects)
//Strings can be objects (or primitive data treated as objects)
//Dates are always objects
//Maths are always objects
//Regular expressions are always objects
//Arrays are always objects
//Functions are always objects
//Objects are objects

//Objects written as name value pairs are similar to:
//
//    Associative arrays in PHP
//Dictionaries in Python
//Hash tables in C
//Hash maps in Java
//Hashes in Ruby and Perl
