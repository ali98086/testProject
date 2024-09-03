<?php

namespace App\Helpers;


if (!function_exists('calculate')) {

function calculate($input , array $array){

    // $array= [];
    // $number = $input;
    
    // for($k=0 ; $k <= rand(0,rand()); $k++){

        // array_push($array , rand(0,rand()));

    // }

    for($i=0; $i<=count($array)-1 ; $i++){

        for($j=0 ; $j<=count($array)-1 ; $j++){

            $find = false;

            if($i == $j){

                continue;

            }

            $sum= $array[$i]+ $array[$j];

            // if($sum > $number){
            if($sum > $input){

                echo $array[$i].'-'.$array[$j];
                $find = true;
                
            }

            if($find == true){

                break;

            }

        }

        if($find == true){

            break;

        }

    }
}
}

?>