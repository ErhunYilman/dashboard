<!-- navigation -->
<ul class="navigation">
    <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
        <a href="<?php echo Config::get('URL'); ?>index/index">Index</a>
    </li>
    <li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
        <a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
    </li>
    <?php if (Session::userIsLoggedIn()) { ?>
        <li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
            <a href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
        </li>
        <li <?php if (View::checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
            <a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
        </li>
    <?php } else { ?>
        <!-- for not logged in users -->
        <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
            <a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
        </li>
        <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
            <a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
        </li>
    <?php } ?>
</ul>

<!-- my account -->
<ul class="navigation right">
<?php if (Session::userIsLoggedIn()) : ?>
    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
        <a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
        <ul class="navigation-submenu">
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
            </li>
        </ul>
    </li>
    <?php if (Session::get("user_account_type") == 7) : ?>
        <li <?php if (View::checkForActiveController($filename, "admin")) {
            echo ' class="active" ';
        } ?> >
            <a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
        </li>
    <?php endif; ?>
<?php endif; ?>
</ul>
        <div class="footer"></div>
  <!-- close class="wrapper" -->

    <!-- the support button on the top right -->
    <a class="support-button" href="https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579" target="_blank"></a>
</body>
<!-- jQuery 2.0.2 -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
<script src="<?php echo Config::get('URL'); ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- jQuery UI 1.10.3 -->
<script src="<?php echo Config::get('URL'); ?>js/jquery-ui-1.12.1.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo Config::get('URL'); ?>js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo Config::get('URL'); ?>js/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo Config::get('URL'); ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- fullCalendar -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo Config::get('URL'); ?>js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="<?php echo Config::get('URL'); ?>js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo Config::get('URL'); ?>js/AdminLTE/dashboard.js" type="text/javascript"></script>

<script src="<?php echo Config::get('URL'); ?>js/script.js" type="text/javascript"></script>



</html>
