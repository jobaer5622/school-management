<?php include '../lib/Session.php';
Session::checkSession();

$userId = Session::get('ad_id');
$ad_role = Session::get('ad_role');


include('../cls/admin_profile.php');
include('../cls/teacher.php');
include('../cls/Addmission.php');
include('../cls/themesetup.php');
include('../cls/Student.php');
include('../cls/accounts.php');


$ad = new AdminProfile();
$tsr = new Teacher();
$std = new Addmission();
$thset = new ThemeSetup();
$cu_std = new Student();
$acc = new accounts();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name of School</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>