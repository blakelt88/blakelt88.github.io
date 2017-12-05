<?php

require('../model/database.php');
require('../model/customer_db.php');
require('../model/registration_db.php');
require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == 'verify') {

    $name = filter_input(INPUT_POST, 'product');
    $customer_id = filter_input(INPUT_POST, 'customer_id');
    $product_code = get_product_id($name);
    
    if ($customer_id == NULL) {
        $error = "*You are not registered in the system. Please contact the administator to be added.";
        include 'customer_login.php';
    }else{
    add_registration($customer_id, $product_code);
    include 'verify_register.php';
}
}

if ($action == NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = '$email';
    }
}if ($action == '$email') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email == NULL || $email == FALSE) {
        $error = "*Please enter a valid email address!";
        include 'customer_login.php';
    } else {
        $customer_first_name = get_customer_by_firstname($email);
        $customer_last_name = get_customer_by_lastname($email);
        $products = get_product();
        $customer_id = get_customer_id($email);
        include ('product_register.php');
    }
}


/* 
 * What you will need
 *   1. The product_register application should default to the customer_login view
 *   2. If the email address is not provided, make them enter one
 *   3. Check if the email entered is valid, if so get the user information from 
 *       the database
 *   4. Send the logged-in user to the product registration page
 *   5. Automatically enter the user's name in the product registration form
 *   6. When the page loads the product list should be a drop down menu of 
 *       products built from a resultset queried out of the database
 *   7. If the product registration data is submitted, register the product
 *   8. If the product is registered successfully, confirm it to the user.
 */
