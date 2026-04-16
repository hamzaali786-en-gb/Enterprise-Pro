<?php
include('../db/db.php');

session_start();
ob_start();

if (isset($_POST['submit'])) {
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    $query = mysqli_query($db, "SELECT * FROM login  WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) == 1) {
        if ($row = mysqli_fetch_assoc($query)) {
            if ($row['role'] == "Admin") {
                $location = "../dashboard/admin";
            } else if ($row['role' == "user"]) {
                $location = "../dashboard/user";
            }

            $_SESSION["Last_login_timestamp"] = time();
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['role'] = $row['role'];
            header('location: ' . $location);
        }
    } else {
        echo ("<script>alert('Error, Incorrect username or password');document.location='../auth_admin'</script>");
    }
}


function isLoggedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}