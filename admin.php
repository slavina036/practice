<?php

    session_start();
    if ($_GET['action'] == 'logout') {
        logout();
    } else if (($_POST['username'] == 'admin' && $_POST['password'] == '12345') or $_SESSION['loggedin'] == true) {
            $_SESSION['loggedin'] = true;
            require( "templates/userInfo.php" );
    } else {
        login();
    }

    function login() {
        require( "templates/loginForm.php" );
    }

    function logout() {
        $_SESSION['loggedin'] = false;
        header("Location: index.php");
    }