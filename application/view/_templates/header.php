<!doctype html>
<html>
<head>
  <?php
  $now = new DateTime();
  $date = $now->getTimestamp();
   ?>
    <title>HUGE</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo Config::get('URL'); ?>css/bootstrap.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo Config::get('URL'); ?>css/ionicons.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo Config::get('URL'); ?>css/morris/morris.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo Config::get('URL'); ?>css/jvectormap/jquery-jvectormap-1.2.2.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="<?php echo Config::get('URL'); ?>css/fullcalendar/fullcalendar.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo Config::get('URL'); ?>css/daterangepicker/daterangepicker-bs3.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo Config::get('URL'); ?>css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo Config::get('URL'); ?>css/AdminLTE.css?_=<?=md5($date)?>s" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css?_=<?=md5($date)?>" />
    <!-- <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap-grid.min.css" /> -->
</head>
<body class="skin-black">
        <!-- logo -->
