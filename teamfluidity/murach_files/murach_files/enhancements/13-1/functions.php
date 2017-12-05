<?php

// This function is going to get the yearly interest or monthly rate
function futureValCal($investment, $years, $interest_rate, $months, $wants_monthly) {

// if wants monthly is not checked we are going to run the yearly rate
    if ($wants_monthly === 'No'){

//This part of our function calculates our yearly rate        
    $future_value = $investment;
   for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
        
   }
   
   return $future_value;
   
   } else {
//This part of our function calculates our montly rate
    $future_value = $investment;
    for ($i = 1; $i <= $months; $i++) {
        $future_value = ($future_value + ($future_value * ($interest_rate *.01 / 12)));
        
    }
    
    return $future_value;
    
   }
}

// This function is doing our percent formating
function formatPercent($interest_rate){
$yearly_rate_f = $interest_rate.'%';
return $yearly_rate_f;
}

// This Funciton is applying currency formatting to the Investment and the Future Value
function formatCurrency($investment, $future_value, &$investment_f, &$future_value_f){
    
    $investment_f = '$'.number_format($investment, 2);
    $future_value_f = '$'.number_format($future_value, 2);
     
}


?>