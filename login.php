<?php
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if($result->num_rows == 0){
        $_SESSION['message'] = 'ایمیل (یا شماره همراه) اشتباه است.';
        header("location: ./error.php");
    }
    else{
        $user = $result->fetch_assoc();

        if(password_verify($_POST['pass'], $user['password'])) {
            
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['level'] = $user['level'];

            $_SESSION['logged_in'] = true;

            header("location: ./profile.php");
        }
        else{
            $_SESSION['message'] = "رمز عبور وارد شده اشتباه است.";
            header("location: ./error.php");
        }
    }

?>