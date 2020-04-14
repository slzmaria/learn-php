<html>
<head></head>
<body>
    <h1>
        One for
    
      <?php
     
        $name = $_GET['name'];
             
         if ($name != '') {
            echo $_GET['name'];
        } else {
            echo 'me';
        }       
      ?>
      
        one for me
    </h1>
</body>
</html>
