<?php
require_once 'php/DatabaseConnection.php';

$connect = new DatabaseConnector();
$connect->connect();


$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$accounttype = $_POST['accounttype'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPass = md5($password);


if (isset($_POST)) {

    $sql = "INSERT INTO members VALUES('$username','$country','$state','$city','$accounttype','$email','$hashedPass', now())";

    $connect->getConnection()->query($sql);

    $id = $connect->insert_id;
}
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

        <div class="container text-center">
            <div class="col-md-6">
                <h1>User Authentication Tester</h1>
                <form action="index.php enctype="multipart/form-data">
                    <h6><?php echo "$errorMsg"; ?></h6>

                    <div class="form-group">
                        <label for="userName">User Name</label>
                        <input type="text" class="form-control" id="userName" name="username" placeholder="Enter user name"
                               value="<?php echo "$username"; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" name="country" class="form-control">
                            <option value="<?php echo "$country"; ?>"><?php echo "$country"; ?></option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="Mexico">Mexico</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input name="state" type="text" value="<?php echo "$state"; ?>" class="form-control" id="state"
                               placeholder="State" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input name="city" type="text" value="<?php echo "$city"; ?>" class="form-control" id="city"
                               placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <label for="accounttype">Account Type</label>
                        <select name="accounttype" id="accounttype" class="form-control">
                            <option value="<?php echo "$accounttype"; ?>"><?php echo "$accounttype"; ?></option>
                            <option value="a">Normal User</option>
                            <option value="b">Expert User</option>
                            <option value="c">Super User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input name="email" type="email" value="<?php echo "$email"; ?>" class="form-control" id="email"
                               placeholder="Email address please" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" value="<?php echo "$password"; ?>" class="form-control"
                               id="password" placeholder="Password" required>
                        <h6>(Letters or numbers only. No spaces or symbols.)</h6>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
            <div class="col-md-6 text-center">
                <h3><?php
                    echo "Username: " . $username . "<br>" .
                    "Password: " . $password . "<br>" .
                    "Encrypted Password: " . $hashedPass . "<br>" .
                    "User ID: " . $id . "<br>"
                    ?>
                </h3>
                <h4>
                    <a href="activation.php?id=<?php echo $id ?>">Click here to activate</a>
                </h4>
                <h4><a href="source_code_tester.php">Source Code Test Page</a></h4>
                <h4><a href="php/php_info.php">PHP Info Page</a></h4>
                <h4><a href="php/captcha_tester.php">Captcha Tester</a></h4>
                <h4><a href="form_tester.php">Javascript Input Validation</a></h4>
                <h4><a href="html_five_tester.php">HTML 5 Tester</a></h4>
                <h4><a href="jquery_tester.html">Jquery Tester</a></h4>
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