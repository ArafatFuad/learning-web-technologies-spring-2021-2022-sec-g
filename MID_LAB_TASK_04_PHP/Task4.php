<?php
    
    function largest($number1,$number2,$number3)

	if($number1>$number2 && $number1>$number3 ){
        echo "First number is larger";
    }elseif($number2>$number1 && $number2>$number3){
        echo "second number is larger";
    }else{
        echo "Third number is larger";
    }
       
    largest(4,5,6)
    

	
?>