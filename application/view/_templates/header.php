<!doctype html>
<html>
<head>
  <?php
  $now = new DateTime();
  $date = $now->getTimestamp();
   ?>
    <title>hoi</title>
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
  <?php
    if (Session::userIsLoggedIn()) {
  ?>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Home</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Enter your query...</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                </li>
        </ul>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--red-900 mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header">
    <?php if (Config::get('USE_GRAVATAR')) { ?>
          <img class="demo-avatar" src='<?= Session::get('user_gravatar_image_url'); ?>' />
          <?php } else { ?>
          <img class="demo-avatar" src='<?= Session::get('user_avatar_file'); ?>' />
          <?php } ?>
        <div class="demo-avatar-dropdown">
          <a href="<?php echo Config::get('URL'); ?>profile/showProfile"><?= Session::get('user_name') ?></a>
          <div class="mdl-layout-spacer"></div>
          <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
          </button>
          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <li><a class="mdl-menu__item" href="<?= Config::get('URL') ?>user/changeUserRole">Cange account type</a></li>
            <li><a class="mdl-menu__item" href="<?= Config::get('URL') ?>user/editAvatar">Edit your avatar</a></li>
            <li><a class="mdl-menu__item" href="<?= Config::get('URL') ?>user/editusername">Edit my user name</a></li>
            <li><a class="mdl-menu__item" href="<?= Config::get('URL') ?>user/edituseremail">Edit my email</a></li>
            <li><a class="mdl-menu__item" href="<?= Config::get('URL') ?>user/changePassword">Change Password</a></li>
          </ul>
        </div>
      </header>
      <nav class="demo-navigation mdl-navigation ">
        <a class="mdl-navigation__link <?php if (View::checkForActiveController($filename, "index")) { echo ' active" '; } ?>" href="<?= Config::get('URL') ?>index/index"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
        <a class="mdl-navigation__link <?php if (View::checkForActiveController($filename, "profile")) { echo ' active" '; } ?>" href="<?= Config::get('URL') ?>profile/index"><i class="material-icons" role="presentation">inbox</i>Profiel</a>
        <a class="mdl-navigation__link <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' active" '; } ?>" href="<?= Config::get('URL') ?>dashboard/index"><i class="material-icons" role="presentation">delete</i>Dashboard</a>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
      </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
      <?php } ?>
