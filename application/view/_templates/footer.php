<?php
$now = new DateTime();
$date = $now->getTimestamp();
 ?>
<div class="footer"></div>
  <!-- close class="wrapper" -->

    <!-- the support button on the top right -->
    <a class="support-button" href="https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579" target="_blank"></a>
  </div>
</main>
    <!-- jQuery 2.0.2 -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
    <script src="<?php echo Config::get('URL'); ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="<?php echo Config::get('URL'); ?>js/jquery-ui-1.12.1.min.js" type="text/javascript"></script>
    <!-- script -->
    <script src="<?php echo Config::get('URL'); ?>js/script.js?_=<?=md5($date)?>" type="text/javascript"></script>

    <script src="<?php echo Config::get('URL'); ?>js/material.min.js" type="text/javascript"></script>
  </body>
</html>
<!-- navigation -->
