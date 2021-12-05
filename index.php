<!DOCTYPE html>
<?php
    require './db.php';
    session_start();
?>

<html>

<head>
    <title>کیلید | سامانه خرید و فروش - رهن و اجاره مسکن</title>
    <link rel="stylesheet" type="text/css" href="./cssFile2.css" media="screen" />
</head>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['login']))
        {
            require 'login.php';
        }
        elseif(isset($_POST['register']))
        {
            require 'register.php';
        }
    }
?>

<body>
    <div id="box1">
        <div style="position:relative; left:22.5%; top:30px;">
            <a href="./kilid.php"><img src="https://i.ibb.co/c2gcBwL/remove-Icon.png" style="border-radius:30px;" /></a>
        </div>
        <div id="box2">
            <div id="box3">
                <button class="tablink" onclick="openTab('Loginn', this)">ورود</button> &nbsp&nbsp
                <button id="defaultOpen" class="tablink" onclick="openTab('Register', this)">ثبت نام</button>

                <form id="Loginn" class="tabcontent" action="./index.php" method="post">
                    <div><input id="searchInput" type="text" name="email" value="" size="35" maxlength="30" placeholder="شماره همراه یا ایمیل" required /></div>
                    <div><input id="searchInput" type="password" name="pass" value="" size="35" maxlength="20" placeholder="رمز عبور" required /></div>
                    <br />
                    <div style="text-align:center; font-size:11.5px;color:black">
                        <span>رمز خود را</span>
                        <span><a href="./forgot.php" style="text-decoration:none; color:#517CFB">فراموش کرده اید؟</a></span>
                    </div>
                    <div style="text-align:center;">
                        <input type="submit" id="submitBotton" name="login" value="ارسال" />
                    </div>
                    <br /><br />
                </form>

                <form id="Register" class="tabcontent" action="./index.php" method="post">
                    <div><input id="searchInput" type="text" name="firstname" value="" size="35" maxlength="30" placeholder="نام" required /></div>
                    <div><input id="searchInput" type="text" name="lastname" value="" size="35" maxlength="30" placeholder="نام خانوادگی" required /></div>
                    <div><input id="searchInput" type="text" name="email" value="" size="35" maxlength="30" placeholder="ایمیل" required /></div>
                    <div><input id="searchInput" type="text" name="phone" value="" size="35" maxlength="30" placeholder="شماره همراه" /></div>
                    <div><input id="searchInput" type="password" name="pass" value="" size="35" maxlength="20" placeholder="رمز عبور" required /></div>

                    <div style="text-align:center; font-size:11.5px;color:rgba(28,28,28,.6);">
                        <span id="newsCheckbox"><input type="checkbox" name="rcvNews" value="rcvNews" style="position:relative; top:4px;" /></span>
                        <span style="margin-left:30px">دریافت خبرنامه</span>
                        <span>ثبت نام به معنی قبول </span>
                        <span><a href="https://kilid.com/terms" style="color:#517CFB; text-decoration: none; border-bottom: 1px solid;">قوانین و مقررات </a></span>
                        <span>است</span>

                    </div>

                    <div style="text-align:center; margin-top:10px;">
                        <input type="submit" id="submitBotton" name="register" value="ارسال" />
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        function openTab(tabName, elmnt) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].setAttribute("style", "text-decoration:none; color: #C3C3C3; padding-right:5px; border-right: 1px solid #C3C3C3;");
            }
            document.getElementById(tabName).style.display = "block";
            elmnt.setAttribute("style", "color: #B30753; border-right: 1px solid #B30753;");
        }

        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>