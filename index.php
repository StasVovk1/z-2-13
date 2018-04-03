<?php 
    $mass = [1,2,3,4,5,6,7,8,9,0,10];
    echo 'Исходные данные: '.json_encode($mass);

    $min = $max = $min_2 = $max_2 =$mass[0];   
    $min_i = $max_i = 0;
    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] < $min){         
            $min = $mass[$i];
            $min_i = $i;
        }
        if($mass[$i] > $max){
           $max = $mass[$i];
           $max_i = $i;
        }
    }

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] < $min_2 && $i !== $min_i){         
            $min_2 = $mass[$i];
        }
        if($mass[$i] > $max_2 && $i !== $max_i){
           $max_2 = $mass[$i];
        }
    }
    echo '<br>Max: '.$max.', '.$max_2;
    echo '<br>Min: '.$min.', '.$min_2;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>

