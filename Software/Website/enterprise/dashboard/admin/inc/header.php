<?php $path = "";
$path = ($paths == 1 ? $path = '' : ($paths == 2 ? '../' : '../../'));

include($path . '../db/db.php');
include(($paths == "3" ? '../inc/session.php' : 'inc/session.php'));
include(($paths == "3" ? '../inc/data.php' : 'inc/data.php')); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Project Dashboard</title>

    <link rel="stylesheet" href="<?php echo $path; ?>css/bootstrap1.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>js/themefy_icon/themify-icons.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>js/font_awesome/css/all.min.css" />

    <!-- profile and input css -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/overide.css">

    <!-- menu css  -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/menu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/style1.css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/colors/default.css" id="colorSkinCSS">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>