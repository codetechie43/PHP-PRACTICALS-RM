<?php
function fibonacci($n){
    $fibonacci_series = [];
    $fibonacci_series[0] = 0;
    $fibonacci_series[1] = 1;

    for($i = 2; $i < $n; $i++){
        $fibonacci_series[$i] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
    }

    return $fibonacci_series;
}

$n = 10; // Change this value to generate Fibonacci series up to 'n' numbers

$result = fibonacci($n);

echo "Fibonacci Series up to $n numbers: ";
foreach($result as $value){
    echo $value . " ";
}
?>
