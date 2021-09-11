<?php
for($i = 1; $i <= 3; $i++){
    for($a = 1; $a <= $i; $a++){
        echo "perulangan $a <br>";
    }
    echo "<br>";
}

for($i = 3; $i <= 13; $i+=2){
    for ($j = 6;$j >= $i;$j--) {
        echo " ";
    }
    for ($k = 6;$k <= $i;$k+=2) {
        echo "$i";
    }
    for ($l = 1;$l <= $i;$l+=2) {
        echo "$i";
    }
    echo "<br>";
}

?>