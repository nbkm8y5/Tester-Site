<?php
require_once 'php/DatabaseConnection.php';

$connect = new DatabaseConnector();
$connect->setLink();
$connect->getLink();
$connect->selectDatabase();
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
                <h1>Test Form</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="a">Operand: A</label>
                        <input class="form-control" id="a" name="a">
                    </div>
                    <div class="form-group">
                        <label for="a">Operand: B</label>
                        <input class="form-control" id="b" name="b">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit" onclick="multiplier();">Multiply</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container text-center" id="DOM_manipulation">
            <div class="col-md-offset-4 col-md-4"></div>
            <h6>DOCUMENT WRITE TEST</h6>
            <div id="document_write">
                <h2>
                    <script>
                        a = "DOCUMENT WRITE TEST";
                        b = " IS WORKING";
                        document.write(a + b);
                    </script>
                </h2>
            </div>

            <div>
                <h6>SOURCE TEST</h6>
                <h2 id="source">GET ELEMENT BY ID TEST</h2>
            </div>
            <div>
                <h6>DESTINATION TEST</h6>
                <h2 id="destination"></h2>

            </div>
            <div>
                <h6>DOCUMENT WRITE FROM FILE TEST</h6>
                <h2 id="java">
                </h2>
                <script>
                    op = new Operations();
                </script>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
                    var sourceObject = document.getElementById('source'); //THIS PASSES THE OBJECT
                    var source = sourceObject.innerHTML;//THIS GETS THE TEXT FROM THE OBJECT
                    document.getElementById('destination').innerHTML = source;//THIS SENDS THE ELEMENT TO THE ID DESTINATION
        </script>
        <script src="js/source_code.js"></script>
    </body>
</html>
