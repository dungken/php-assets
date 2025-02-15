<?php

// session_start();
// require "../data/users.php";
// require "../lib/data.php";
// require "../lib/validation.php";
// require "../lib/url.php";

if (isset($_POST['btn_login'])) {
    $error = array();

    #Validation username
    if (empty($_POST['username'])) {
        //Hạ cờ
        $error['username'] = 'Username cannot be left blank!';
    } else {
        if ((strlen($_POST['username']) < 6) || (strlen($_POST['username']) > 32)) {
            $error['username'] = 'Username is between 6 and 32 characters!';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username includes letters, numbers, periods, underscores, from 6 - 32 characters!';
            } else {
                $username = $_POST['username'];
            }
        }
    }
    #Validation password
    if (empty($_POST['password'])) {
        $error['password'] = 'Password cannot be left blank!';
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = 'Passwords include letters, numbers, special characters, start with an uppercase letter and have 6 to 32 characters!';
        } else {
            $password = md5($_POST['password']);
        }
    }


    #Kết luận
    $ok = false;
    if (empty($error)) {
        // Check login
        if (check_login($username, $password)) {
            echo "Login success!";
            //Set session login
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            #Solving remember me
            if (!empty($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600, '/');
                setcookie('user_login', $username, time() + 3600, '/');
                // show_array($_COOKIE);
            }
            
            redirect_to('?page=home');
        } else
            $error['login'] = 'Account invalid in system!';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Page Login</title>
</head>

<body>
    <div id="wp-page-login">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" id="username" placeholder="Username" value="<?php if(is_remember_me()) echo $_COOKIE['user_login']; else echo set_value('username'); ?>">
            <?php echo form_error('username'); ?>
            <input type="password" name="password" id="password" placeholder="Password">
            <?php echo form_error('password'); ?>
            <div class="remember-me">
                <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me">Remember me</label>
            </div>
            <?php echo form_error('login'); ?>
            <input type="submit" value="Login" name="btn_login" id="btn-login">
            <a id="lost-pass" href="">Lost Password</a>
        </form>
    </div>

</body>

</html>