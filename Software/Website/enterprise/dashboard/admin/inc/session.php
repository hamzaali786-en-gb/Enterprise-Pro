<?php
session_start();
if (!isset($_SESSION['role']) || ($_SESSION['role'] == '')) {

    $_SESSION['msg'] = "You must log in first";

    header('location:../../../auth');
} else {
    if ((time() - $_SESSION['Last_login_timestamp']) > 58000) {
        header('location:../../../auth');
    } else {
        $_SESSION["Last_login_timestamp"] = time();
    }
}

//LOGOUT BUTTON
if (isset($_GET['logout'])) {
    unset($_SESSION['role']);
    unset($_SESSION['uid']);
    header('location:../../../auth');
}


//CHECKING IF THE USER ACTUALLY EXIST
check();
function check()
{
    global $db, $path;

    $check = mysqli_query($db, "SELECT * FROM login WHERE uid='$_SESSION[uid]' AND role='$_SESSION[role]' LIMIT 1");
    if (mysqli_num_rows($check) < 1) {
        session_destroy();
        unset($_SESSION['role']);
        unset($_SESSION['uid']);
        header('location:../../../auth');
    }
}
