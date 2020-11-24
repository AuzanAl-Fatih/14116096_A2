<?php
function faktorial($x=1){
    if($x==1){
        return 1;
    }else{
        return $x * faktorial($x-1);
    }
}
echo "5! = ".faktorial(5);
?>