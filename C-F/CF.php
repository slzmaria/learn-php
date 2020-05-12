<?php       
    
    $val = (int) $_POST['degrees'];
    $converte = isset($_POST['converte']) ? $_POST['converte']: 'undefined';
    $result = null;

    if ($converte === 'C') {
       $result = ($val - 32) * (5/9);
    }

    if ($converte === 'F') {
        $result = ($val * 9/5) + 32;
    }
    if ($converte === 'undefined') {
      echo 'Unexpected direction to convertion';
      exit;
    }

      echo $result,' Degrees ', $converte;

