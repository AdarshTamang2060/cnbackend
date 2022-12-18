<?php
function aop($age){

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }

}


 

//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$name1="adarsh";
$n1v="23";
$name2="ramesh";
$n2v="20";
aop(["$name1"=>"$n1v", "$name2"=>"$n2v"]);

 


?>