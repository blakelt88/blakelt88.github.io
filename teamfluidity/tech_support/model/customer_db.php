<?php

require 'database.php';

function get_customer_by_firstname($email) { 
    global $db;
    $query = 'SELECT *
                FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    $customer_first_name = $customer['firstName'];
    return $customer_first_name;
    
}
function get_customer_by_lastname($email) { 
    global $db;
    $query = 'SELECT *
                FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    $customer_last_name = $customer['lastName'];
    return $customer_last_name;
}

    function get_customer_id($email) { 
    global $db;
    $query = 'SELECT *
                FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    $customer_id = $customer['customerID'];
    return $customer_id;
    }
 
    function get_product_id($name) {
    global $db;
    $query = 'SELECT productCode
                FROM products
              WHERE name = :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $product_name = $statement->fetch();
    $statement->closeCursor();
    $product_code = $product_name['productCode'];
    return $product_code;
    }