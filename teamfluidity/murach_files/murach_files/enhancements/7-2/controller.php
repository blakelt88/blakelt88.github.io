<?php


    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $months = $years * 12;
    

    // validate investment
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

       
    

    //This local vairable is for the checkbox, to see if the user wants the calcultation monthly or yearly
     $wants_monthly = filter_input(INPUT_POST,'wants_monthly' );
        
    // If the checkbox is not clicked then calculation is done yearly    
    if (!isset($wants_monthly)) {
      $wants_monthly = 'No';  
      
    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }

    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
    
    
    // If the checkbox is clicked then the calculation is done monthly
    } else {
      $wants_monthly = 'Yes';
      
      // this calculates the intrest in months
      
      $future_value = $investment;
    for ($i = 1; $i <= $months; $i++) {
        $future_value = ($future_value + ($future_value * ($interest_rate *.01 / 12)));
    }

    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);  
            
    }
    
    
    
?>