<?php 
    $in = 100;
    $i = array();
    echo "Input is" . $in ." <br/>";
    for($d=1;$d<=($in/2);$d++){
        
        if($in % $d == 0)
        {
            array_push($i,$d);
        }
    }
    foreach($i as $a){
        echo "<br/>" . "Value is : " . $a;
    }
    echo "<br/>" ."smallest num is : ". $i[0];
    echo "<br/>" ."next smallest num is : ". $i[1];
    echo "<br/>" ."total coun is : ". sizeof($i);
    ?>
    