<html>
 <head>
 </head>
 <body>
   <?php
      $year = (int) $_GET['year'];  
      $lev = $year . ' is not a leap year';
      
        if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
      $lev = $_GET['year'] . ' is a leap year';
      }
        echo $lev;
  
    ?>
 </body>
</html>
