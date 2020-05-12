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
   

    echo $result,' Degrees ', $converte;

