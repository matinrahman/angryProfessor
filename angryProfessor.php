<?php
function angryProfessor($k, $a) {
    $counter = 0;
    for($i=0;$i<sizeof($a);$i++){
        if($a[$i]<=0){
            $counter++;
        }
    }
    if($counter>=$k)
        return "NO";
    else
        return "YES";

}
