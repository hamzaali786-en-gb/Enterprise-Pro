<?php
session_start();
ob_start();
require('../../../../db/db.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['username']) && isset($_POST['password'])) {
    $fname = e($_POST['fname']);
    $lname = e($_POST['lname']);
    $email = e($_POST['email']);
    $role = e($_POST['role']);

    $username = e($_POST['username']);
    $password = e($_POST['password']);


    $uid = substr(str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
    $check = mysqli_query($db, "SELECT * FROM users WHERE uid='$uid' OR email='$email' LIMIT 1");
    if ($row = mysqli_fetch_assoc($check)) {
        if ($row['uid'] === $uid) {
            echo "Error, user already exists";
        }

        if ($row['email'] === $email) {
            echo "Error, Email already exists";
        }
    } else {
        $query = mysqli_query($db, "INSERT INTO users(uid,fname, lname, email,role)VALUES('$uid','$fname','$lname','$email','$role')");
        $query2 = mysqli_query($db, "INSERT INTO login(uid,username, password,role)VALUES('$uid','$username','$password','$role')");
        if ($query && $query2) {
            http_response_code(201);

            echo "Success, Account Registration successful";
        } else {
            http_response_code(500);

            echo "Error, An Error occurred please check input and try again";
        }
    }
} else {
    http_response_code(400);
    echo "Error, An Error occurred please check input and try again";
}
