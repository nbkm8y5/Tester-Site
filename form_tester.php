<?php
$userName = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_SPECIAL_CHARS);
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPass = md5($password);
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
<div class="container text-center">
    <div class="col-md-offset-3 col-md-6">
        <h1>Javascript Input Validation Tester</h1>

        <form name = "sign_in" action="form_tester.php" onsubmit="return inputValidator()" method="post">
            <div class="form-group">
                <label for="userName">User Name</label>
                <input type="text" class="form-control" id="userName" name="user_name" placeholder="Enter user name"
                       value="<?php echo "$userName"; ?>" required>
                <h6 id="userNameResponse"</h6>
            </div>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name"
                       value="<?php echo "$firstName"; ?>" required>
                <h6 id="firstNameResponse"></h6>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name"
                       value="<?php echo "$lastName"; ?>" required>
                <h6 id="lastNameResponse"></h6>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address please"
                       value="<?php echo "$email"; ?>" required>
                <h6 id="emailResponse"></h6>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                       value="<?php echo "$password"; ?>" required>
                <h6 id="passwordResponse"></h6>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <div class="col-md-offset-3 col-md-6 text-center">
        <h3><?php
            echo "Username: " . $userName . "<br>" .
                "First Name: " . $firstName . "<br>" .
                "Last Name: " . $lastName . "<br>" .
                "Email: " . $email . "<br>" .
                "Password: " . $password . "<br>" .
                "Encrypted Password: " . $hashedPass . "<br>";
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
<script src="js/source_code.js"></script>
</body>
</html>