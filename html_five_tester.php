<?php
$userName = $_POST['user_name'];
$firstName = $_POST['first_name'];
define("TITLE", "HTML 5 Tester | Rolando Moreno | Full Stack Web Developer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE; ?></title>

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

<div class="container text-center">
    <h1>HTML 5 TESTER</h1>

    <div class="col-md-offset-4 col-md-4">
        <h2>Numberical Input Validation</h2>
        <div class="form-group">
            <label for="operand_a">Operand A</label>
            <input class="form-control" id="operand_a" type="number" min="0" max="5000">
        </div>
        <div class="form-group">
            <label for="operand_b">Operand B</label>
            <input class="form-control" id="operand_b" type="number" min="0" max="5000">
        </div>
        <div class="form-group">
            <button class="btn btn-danger" type="button" onclick="sum()">Calculate</button>
        </div>
        <div class="form-group">
            <label for="output">Sum</label>
            <h6 id="output"></h6>
        </div>
        <script>
            function sum() {
                var a = document.getElementById('operand_a');
                var b = document.getElementById('operand_b');
                document.getElementById('output').innerHTML = parseInt(a.value) + parseInt(b.value);
            }
        </script>
    </div>
    <div class="col-md-offset-4 col-md-4">
        <h2>Pattern Input Validation</h2>

        <form action="html_five_tester.php" method="post">
            <div class="form-group">
                <label for="user_name">User Name</label>
                <input class="form-control" name="user_name" type="text" pattern="^[a-zA-Z][a-zA-Z0-9.]{1,20}$" title="Numbers, letters, periods and mo more than 20 characters" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input class="form-control" name="first_name" type="text" pattern="^[a-zA-Z-]{1,20}$" title="Letters, hyphens and mo more than 20 characters" required>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-md-offset-3 col-md-6 text-center">
        <h3><?php
            echo "Username: " . $userName . "<br>" .
                "First Name: " . $firstName . "<br>";
            ?>
        </h3>
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
