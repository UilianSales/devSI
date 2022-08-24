<?php
    function nameFunction(){
        if(true){
            echo "function ok";
        }else{
            echo "will naver fall here";
        }
    }
    function media($num1 , $num2){
        $result = $num1 + $num2;
        $media =$result / 2;
        return $media;
    }
    function plus($num1 , $num2){
        $add = $num1 + $num2;
        return $add;
    }

    function subtraction($num1 , $num2){
        $result = $num1 - $num2;
        return $result;
    }
    
    function multiplication($num1 , $num2){
        $result = $num1 * $num2;
        return $result;
    }

    function division($num1 , $num2){
        $result = $num1 / $num2;
        return $result;
    }

    function sumArray($array){
        $result = 0;
        for($i = 0; $i < count($array); $i++){
            $return += $array[$i];
        }
        return $return; 
    }

    function legendaryCalculator($num1 ,$num2 ,$operator){
        echo "<br>";
        if($operator == "+"){
            echo plus($num1 , $num2);
        }else if($operator == "-"){
            echo subtraction($num1 , $num2);
        }else if($operator == "*"){
            echo multiplication($num1 , $num2);
        }else if($operator == "/"){
            echo division($num1 , $num2);
        }else if($operator == "media"){
            echo media($num1, $num2);
        }else{
            echo "erro";
        }
    }

    // $value1 = 1234;
    // $result = plus(122,$value1);
    // echo "fist sum ".plus(3122,312) ."<br>";
    // echo "2º sum ".plus(3312,31) ."<br>";
    // echo "3° sum ".plus(23,1) ."<br>";
    // echo "4° sum ".plus(321,31) ."<br>";
    // echo "5° sum ".plus(3312,31) ."<br>";
    // echo "6° sum ".plus(31,334554) ."<br>";
    // echo "7° sum ".plus(1332,3123) ."<br>";
    // echo "8° sum ".plus(3312,31) ."<br>";
    // echo "9° sum ".plus(353312,45) ."<br>";
    // echo "the sum result is: ". $result;

    // $number = array(1,5,10,15,20,25);
    // echo sumArray($number);

    legendaryCalculator(70,12,"*");
    legendaryCalculator(70,12,"-");
    legendaryCalculator(70,12,"+");
    legendaryCalculator(70,12,"/");
    legendaryCalculator(10,6 ,"media");
    legendaryCalculator(70,12,"kjsklahjkdzxbhfjhkzdxhb");
?>