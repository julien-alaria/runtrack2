
<?php

$job01 = [200, 204, 173, 98, 171, 404, 459];

echo $job01[3]."<br>"; 

foreach ($job01 as $value) {
    
    if ($value %2 == 0){
        echo $value." est pair<br>";
    }else {
        echo $value. " est impair<br>";
    }

}