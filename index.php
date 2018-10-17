<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      
      <?php $link = 'https://www.android.com/static/2016/img/share/andy-lg.png';
            $href = 'https://www.google.com/';
            for($i = 1; $i < 5;$i=$i+1){
                print "<img src=" . $link . ">";
                print "<a href=" . $href . "target=>Google</a>";
            }
            ?>
      
  </body>
</html>