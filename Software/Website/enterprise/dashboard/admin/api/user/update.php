<?php
session_start();
ob_start();
require('../../../../db/db.php');
require('../../inc/data.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])) {
    $fname = e($_POST['fname']);
    $lname = e($_POST['lname']);
    $email = e($_POST['email']);

    $uid = $user['uid'];

    $check = mysqli_query($db, "SELECT * FROM users WHERE uid='$uid' LIMIT 1");
    if (mysqli_num_rows($check) == 1) {
        $query = mysqli_query($db, "UPDATE users SET fname='$fname', lname='$lname', email='$email' WHERE uid='$uid' AND role='Admin'");
        if ($query) {
            http_response_code(201);

            echo "Success, Account Updated successful";
        } else {
            http_response_code(500);

            echo "Error, An Error occurred please check input and try again";
        }
    } else {
        echo "Error, Account not found";
    }
} else {
    http_response_code(400);
    echo "Error, An Error occurred please check input and try again";
}
