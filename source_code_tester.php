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
                <form method="post" action="source_code_tester.php">
                    <div class="form-group">
                        <label for="a">Operand: A</label>
                        <input class="form-control" id="a" name="a">
                    </div>
                    <div class="form-group">
                        <label for="a">Operand: B</label>
                        <input class="form-control" id="b" name="b">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Multiply</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container text-center" id="DOM_manipulation">
            <div class="col-md-offset-4 col-md-4"></div>
            <div id="document_write">
                <h2><script>document.write("DOCUMENT WRITE TEST");</script></h2>
            </div>

            <div>
                <h2 id="source">GET ELEMENT BY ID TEST</h2>
            </div>

            <script>
                var a = document.getElementById("source");
                document.getElementById("destination").innerHTML = a;
            </script>

            <div>
                <h2 id="destination"></h2>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
