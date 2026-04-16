<?php
session_start();
require('../../../../db/db.php');

if (isset($_POST['uid'])) {
    $uid = $_POST['uid'];

    $query = mysqli_query($db, "SELECT * FROM users WHERE uid='$uid' LIMIT 1");
    if ($row = mysqli_fetch_assoc($query)) {
        $delete = mysqli_query($db, "DELETE FROM users WHERE uid='$uid'");
        $delete2 = mysqli_query($db, "DELETE FROM login WHERE uid='$uid'");

        if ($delete && $delete2) {
            echo "Success, Account permanently deleted";
        } else {
            echo "Error, Failed to delete account";
        }
    }
}
