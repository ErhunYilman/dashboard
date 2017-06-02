<!doctype html>
<html>
<head>
  <?php
  $now = new DateTime();
  $date = $now->getTimestamp();
   ?>
    <title>uFly</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Favo Icon -->
    <link rel="icon" type="image/png" href="<?php echo Config::get('URL'); ?>favicon.png"/>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo Config::get('URL'); ?>css/bootstrap.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?_=<?=md5($date)?>" rel="stylesheet" type="text/css" />
    <!-- MaterializeCSS Framework -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/material.min.css?_=<?=md5($date)?>">
    <!-- dashboard style -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/dashboard.css?_=<?=md5($date)?>">

    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css?_=<?=md5($date)?>" />

</head>
<body class="<?php echo View::getBodyClass($filename); ?>">
        <!-- logo -->
