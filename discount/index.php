<html>
 <head>
 </head>
 <body>
   <?php
        $product = $_GET['product'];
        $qua = $_GET['quantity'];
        $price = $_GET['price'];
        $dis = $_GET['discount'];
        $sum = $qua * $price;

        if ($dis !='') {
           $sum = $sum - $sum * ($dis/100);
       }
    //    if (!is_numeric ($qua) || !is_numeric ($price));
    //   {
    //   echo 'Oops..Something went wrong';
    //   exit;
    //   }
    //   if (($qua <= '0') || ($price <= '0'));
    //   {
    //   echo 'Oops..Something went wrong';
    //   exit;
    //   }
  
   ?>
    
  <table border="1">
   <caption>Order information</caption>
   <tr>
       <th>Product name</th>
       <th>Quantity</th>
       <th>Price</th>
       <th>Discount</th>
       <th>Summary</th>
   </tr>
   <tr>
    <td><?php echo $product ?> </td>
    <td><?php echo $qua ?></td>
    <td><?php echo $price ?></td>
    <td><?php  
         if ($dis == '') {
          echo 'No';
        } else {
       echo $dis, '%';
        } ?></td>
    <td><?php 
         if ($dis == '') {
         echo $sum;
        } else {
       echo $sum;
        } ?></td>   
   </tr>
 </body>
</html>
