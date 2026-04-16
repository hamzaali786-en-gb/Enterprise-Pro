<?php
function user($uid)
{
    global $db, $array;

    $query = mysqli_query($db, "SELECT * FROM users WHERE uid='$uid' LIMIT 1");
    if ($row = mysqli_fetch_assoc($query)) {

        $array['uid'] = $row['uid'];
        $array['fname'] = $row['fname'];
        $array['lname'] = $row['lname'];
        $array['email'] = $row['email'];
        $array['role'] = $row['role'];
        $array['date'] = $row['date'];
    }
    return $array;
}

function login($uid)
{
    global $db, $array;

    $query = mysqli_query($db, "SELECT * FROM login WHERE uid='$uid' LIMIT 1");
    if ($row = mysqli_fetch_assoc($query)) {

        $array['username'] = $row['username'];
        $array['password'] = $row['password'];
    }
    return $array;
}


$user = user($_SESSION['uid']);
$login = login($user['uid']);
