<?php
    function GenerateCol ($input) {
        $sReturn = '';
        $Arr = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        while (true) {
            if ( $input / 26 == 1) $input = 0;
            $Div = $input % 26;
            if($Div == 0) $Div = 26;
            $sReturn .= $Arr[$Div - 1];
            $input = floor($input - $Div) / 26;
            if($input <= 26) break;
        }
        if ($input > 0) $sReturn .= $Arr[$input-1];
        echo strrev($sReturn)."</br></br>";
    }

    $init = 17603;
    while(true){
        GenerateCol($init);
        if($init == 458000){
            break;
        }
        $init++;
    }

?>