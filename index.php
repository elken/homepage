<?php
$username = exec("whoami");
$hostname = exec("hostname");

if (true)
{
echo '
<html>
    <head>
        <title>Where the heart is</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="powerline-container">
                    <div class="powerline" id="hostname"> 
                        ' . $username . '@' . $hostname . '
                    </div>

                    <div class="powerline" id="section"> 
                        ~
                    </div>

                    <div class="command">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>';
}
?>
