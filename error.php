<?php
    session_start();
?>

<html>
    <head>
        <title>Error</title>
        <link rel="stylesheet" type="text/css" href="./cssFile2.css" media="screen" />
    </head>
    <body>
        <div style="color: white; text-align:center">
            <h1>Error</h1>
            <p>
                <?php
                    if(isset($_SESSION['message']) AND !empty($_SESSION['message'])):
                        echo $_SESSION['message'];
                    else:
                        header("location: ./index.php");
                    endif;
                ?>
            </p>
            <a href="./index.php"><button id="submitBotton">بازگشت به صفحه ی ورود/ثبت نام</button></a>
        </div>
    </body>
</html>