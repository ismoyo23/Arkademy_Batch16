<?php
createTri('5');

function createTri($value)
{
	for( $a=$value; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "&nbsp&nbsp";
    }for($a1=$value; $a1>$a; $a1--){
        echo"x";
    }for($a2=$value+1; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}
}

?>