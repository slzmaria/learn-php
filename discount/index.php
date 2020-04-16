<html>
<head></head>
<body>
    <h1>
     Bill:  
    <?php
       
        $qua = $_GET['quantity'];
        $price = $_GET['price'];
        $dis = $_GET['discount'];
        $bill = $qua * $price;

      
        if ($dis !='') {
           $bill = ($qua * $price) - (($qua * $price) * ($dis/100));
       }
        echo $bill;
    ?>
   
 </h1>
</body>
</html>
