<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      
      <?php
      
      $sunny = rand(0,1);
      $rainy = rand(0,1);
      
      
      if($sunny && $rainy){
          print "<div style= \"background-color: grey;width: 100px;height:100px;\">Partly sunny</div>";
      }
      elseif ($sunny && !$rainy){
          print "<div style= \"background-color: yellow;width: 100px;height:100px;\">Sunny</div>";
      }
      if (!$sunny && $rainy) {
          print "<div style= \"background-color: blue;width: 100px;height:100px;\">Rainy</div>"; 
      }
      elseif (!$sunny && !$rainy){
          print "<div style= \"background-color: orange;width: 100px;height:100px;\">Cloudy</div>";
      }
      
      ?>
    
  </body>
</html>