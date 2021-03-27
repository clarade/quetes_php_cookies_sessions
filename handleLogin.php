<?php

    $username = $_POST['loginname'];

    if (isset($username)) {
        session_start();
        $_SESSION['name'] = $username;
        header('Location:/index.php');
    // if username exists, redirect to index.php page
    } else {
        header('Location:/login.php');
        // if not, redirect to login.php to try again
    }
