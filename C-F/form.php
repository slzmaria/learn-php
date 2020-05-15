<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 <body>
 <h1 class="C-F" align="center"> Temperature Converter</h1>
  <p class="Greet" align="center">You know what to do</p>
   <form class="C-F" method="POST" align="center">  
      <input type="text" name="degrees" placeholder="Enter the number of degrees  here"> 
        Convert to
      <select name="converte">
            <option value="F">F</option>
            <option value="C">C</option>
      </select>
   <p><button type="submit">Converte</button></p> 
   <p><input type="text" name="result" value="<?php echo $result; ?>" size=1 readonly> Degrees </p>
  </form>
 </body>
</html>
