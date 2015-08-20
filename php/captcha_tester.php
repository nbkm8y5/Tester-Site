<?php
/**
 * Sample PHP code to use reCAPTCHA V2.
 *
 * @copyright Copyright (c) 2014, Google Inc.
 * @link      http://www.google.com/recaptcha
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
require_once "recaptchalib.php";
// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]
    );
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container text-center">
    <div class="col-md-offset-4 col-md-4">
        <h1>CAPTCHA TESTER</h1>

        <h3>Contact Rolando Moreno</h3>

        <form method="post">
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                <script type="text/javascript"
                        src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
                </script>
                <script>
                </script>
                <h6 id="result" style="color: red"><?php echo $resp->success; ?></h6>
            </div>
            <div class="form-group">
                <label class="control-label" for="fName" style="color:#fff">First Name</label>
                <input type="text" class="form-control" name="firstName" value="" placeholder="Enter First Name"
                       required>
            </div>
            <div class="form-group">
                <label class="control-label" for="lName" style="color:#fff">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="" placeholder="Enter Last Name"
                       required>
            </div>
            <div class="form-group">
                <label class="control-label" for="email" style="color:#fff">Email address</label>
                <input type="email" class="form-control" name="emailAddress" value="" placeholder="Enter email"
                       required>
            </div>
            <div class="form-group">
                <label class="control-label" for="comment" style="color:#fff">Comments or Questions</label>
                <input type="text" class="form-control" name="comments" value=""
                       placeholder="Enter any comments or questions you may have" required>
            </div>
            <div class='form-group'>
                <button id="myBtn" type="submit" class="btn btn-default" disabled="true">Send</button>
            </div>
            <div class="form-group">
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

