<?php
global $includes_path; $includes_path= set_include_path(get_include_path(). PATH_SEPARATOR . "/var/www/html/php_Lynda_cursus/example.com/phptest_environment/introducingphp/ch07/07_05");

require 'header.php';
?>

  <!-- maincontent -->
  
  <aside id="sidebar" class="clearfix">
    <article id="comingtoevent">
      <h2 class="highlight">Coming to the event?</h2>
      <h3>Check out our mobile site</h3>
      <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
      <p><img src="images/iphone.png" alt="iPhone"></p>
      <p><a class="link" href="#">Roux Mobile</a></p>
    </article>
    <!-- Coming to event -->
    
    <article id="schedule">
      <h2>Schedule</h2>
      <h3>Monday</h3>
      <p>The first day of CAC events is kicked off under the theme of Art in Full Color. From a demonstration in graffiti art on a wall of the  Rousseau Room, to the exhibit of colorful glazed modern glassware in the Dover Hall.</p>
      <h3>Tuesday</h3>
      <p>Water in Art is the theme for the second day, as art students gather at the Fountain of Intrigue to create ice sculptures, and art lecturers discuss the use of water as an art material, and water as an art subject.</p>
      <p><a class="link" href="schedule/index.php">Full Schedule</a></p>
    </article>
    <!-- Schedule --> 
  </aside>
  <!-- Sidebar -->
 <?php
require "footer.php";
?>