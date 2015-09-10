<?php
require_once 'php/DatabaseConnection.php';

$connect = new DatabaseConnector();
$connect->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Activation Tester | Rolando Moreno | Full Stack Web Developer</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="container text-center" id="form_manipulation">
    <div class="col-md-offset-4 col-md-4">
        <img id="mps_logo" class="img-responsive" src="images/MPS final logo-01.svg" onmouseover="changeImage()" onmouseout="changeBack()" alt="MPS Logo">
        <script>

            var x = document.getElementById('mps_logo');

            function changeImage()
            {
                x.src = "images/Marker.svg";
            }
            function changeBack(){
                x.src = "images/MPS final logo-01.svg";
            }
        </script>
        <h2>$_POST Tester</h2>

        <form method="post">
            <div class="form-group">
                <label for="a">Operand: A</label>
                <input class="form-control" id="a" name="a"  onchange="operandValidation()">
                <h6 id="operandAError" style="color: red"></h6>

            </div>
            <div class="form-group">
                <label for="b">Operand: B</label>
                <input class="form-control" id="b" name="b" onchange="operandValidation()">
                <h6 id="operandBError" style="color: red"></h6>
            </div>
            <div class="form-group">
                <button id="post_tester" class="btn btn-default" disabled="true">Submit</button>
            </div>
        </form>
    </div>
</div>

<div class="container text-center">
    <div class="col-md-offset-4 col-md-4">
        <h2>Document Write Test</h2>

        <div id="document_write">
            <h6>
                <script>
                    a = "DOCUMENT WRITE TEST";
                    b = " IS WORKING";
                    document.write(a + b);
                </script>
            </h6>
        </div>

        <div>
            <h2>Source Test</h2>
            <h6 id="source">GET ELEMENT BY ID TESTED CORRECTLY</h6>
        </div>
        <div>
            <h2>Destination Test</h2>
            <h6 id="destination"></h6>

        </div>

        <div>
            <h2>Document write from file test</h2>
            <h6 id="java">
            </h6>
            <button class="btn btn-success" onclick="writeViaInnerHTML()">Click for text from other file</button>
        </div>

        <div>
            <h2>Encrypted password test</h2>
            <h6><?php
                $testString = 'Rolando Moreno';
                $salt1 = '12%#@#';
                $salt2 = 'f34@#!';
                $result = hash('ripemd128', '$salt1$testString$salt2');
                echo $result . "\r\n";
                ?></h6>
        </div>
    </div>
    <div class="col-md-offset-5 col-md-2">
        <h2>Multiplier</h2>

        <div class="form-group">
            <input class="form-control" id="multA">
        </div>
        <div class="form-group">
            <input class="form-control" id="multB">
        </div>
        <div class="form-group">
            <button class="btn btn-danger" onclick="multiplier()">Click for multiplier</button>
        </div>
        <div id="errorText"></div>
        <label for="product">Answer:</label>

        <div id="product" class="form-group"></div>
    </div>

    <div class="col-md-offset-2 col-md-8">
        <h2>Font Size Test</h2>

        <div id="fontTest" class="form-group">
            TEXT BEING TESTED
        </div>
        <div class="form-group">
            <button class="btn btn-primary" onclick="changeFont()">Change font</button>
        </div>
    </div>

    <div class="col-md-offset-5 col-md-2">
        <h2>Window Alert Test</h2>

        <div class="form-group">
            <input class="form-control" id="addA">
        </div>
        <div class="form-group">
            <input class="form-control" id="addB">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" onclick="sum()">Sum!</button>
        </div>
        <div id="sum" class="form-group"></div>
    </div>

    <div class="col-md-offset-4 col-md-4">
        <h2>JavaScript Object Class</h2>
        <h6 id="objectTester">
            <!--                    It seems that the script below can not be in a function on a separate page.-->
            <!--                    It does not call the function from another file.-->
            <script>
                var person = {
                    firstName: "Rolando",
                    lastName: "Moreno",
                    sex: "m",
                    weight: 270,
                    height: 72,
                    fullName: function () {
                        return this.firstName + " " + this.lastName;
                    }
                };
                document.getElementById("objectTester").innerHTML = person.fullName();
            </script>
        </h6>
    </div>

    <div class="col-md-offset-4 col-md-4">
        <h2>JSON Tester</h2>
        <h6 id="jsonTester">
            <script>
                //A common use of JSON is to read data from a web server, and display the data in a web page.

                var jsonText = '{ "employees" : [' +
                    '{ "firstName":"John" , "lastName":"Doe" },' +
                    '{ "firstName":"Anna" , "lastName":"Smith" },' +
                    '{ "firstName":"Peter" , "lastName":"Jones" } ]}';

                //Now create in into a javascript object

                var jsonObject = JSON.parse(jsonText);

                //                var i;
                //
                //                for (i = 0; i < jsonObject.length; i++) {
                //                    output += jsonObject.employees[i].firstName.value + " " + jsonObject.employees[i].lastName.value + "<br>";
                //                }
                var output = document.getElementById("jsonTester");
                output.innerHTML = jsonObject.employees[1].firstName + " " + jsonObject.employees[1].lastName + "<br>"
                    + " " + jsonObject.employees[0].firstName + " " + jsonObject.employees[0].lastName  + "<br>"
                    + " " + jsonObject.employees[2].firstName + " " + jsonObject.employees[2].lastName;
            </script>
            <br>
            <script>
                document.write(Date());
            </script>
        </h6>
        <h6>&copy <?php echo date("Y") ?> Rolando Moreno</h6>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    var sourceObject = document.getElementById('source').innerHTML; //THIS PASSES THE OBJECT
    //                    var source = sourceObject.innerHTML;//THIS GETS THE TEXT FROM THE OBJECT
    document.getElementById('destination').innerHTML = sourceObject;//THIS SENDS THE ELEMENT TO THE ID DESTINATION
</script>
<script src="js/source_code.js"></script>
</body>
</html>
