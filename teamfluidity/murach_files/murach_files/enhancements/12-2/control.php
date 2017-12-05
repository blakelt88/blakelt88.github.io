<?php
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();


require_once 'functions.php';
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $months = $years * 12;
    
$_SESSION['investment'] = $investment;
$_SESSION['interest_rate'] = $interest_rate;
$_SESSION['years'] = $years;
$_SESSION['months'] = $months;
    

    // Investment Validation
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

    // If an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
// Wants_monthly will change the years to months.
    $wants_monthly = filter_input(INPUT_POST, 'wants_monthly');
    
    // if checkbox is not clicked than calculation is done yearly.
     if (!isset($wants_monthly)) {
    //string for if checkbox not checked, display results page
         $wants_monthly ='No';     
    } else {
        $wants_monthly = 'Yes';
    }
    
    $_SESSION['wants_monthly'] = $wants_monthly;
    
   $future_value = FV\futureValCal($investment, $years, $interest_rate, $months, $wants_monthly);
   
// This function is formating our percent   
   $yearly_rate_f = FV\formatPercent($interest_rate);
   
   $_SESSION['yearly_rate_f'] = $yearly_rate_f;
   
// This Funciton is applying currency formatting to the Investment and future value
    FV\formatCurrency($investment, $future_value, $investment_f, $future_value_f);
    
    $_SESSION['investment'] = $investment_f;
    $_SESSION['future_value_f'] = $future_value_f;
     
$interest_rate_decimal = $interest_rate * .01;  //make the interest rate into a decimal
//Break the equation into parts for simplicity


?>