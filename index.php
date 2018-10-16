<?php //Funkcija nustato laiko zona ?>
<?php date_default_timezone_set('Europe/Vilnius');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP lydes ir <?php print date('Y/m/d', strtotime('+1 day')) ?> </title>
  </head>
  <body>
      <!-- Heading -->
      <h1><i>Edgaras</i> - PHP su manim buvo ir  <?php date_default_timezone_set('Europe/Vilnius'); print date('H', strtotime('-1 hour')) . ' valanda!'?></h1>
      <!-- Paragraph -->
      <!--
      <p><?php print date('Y', strtotime('+1 year')) ?> ne uz kalnu</p>
      -->
  </body>
</html>

<?php
print 'Veikia su GIT!';