<html>
 <head>
 </head>
 <body>
   <?php
      $year = $_GET['year'];  
      $lev = 'This year ' . $_GET['year'] . ' is not leverage';
      
        if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
      $lev = 'This year ' . $_GET['year'] . ' is leverage';
      }
        echo $lev
  
    ?>
 </body>
</html>
