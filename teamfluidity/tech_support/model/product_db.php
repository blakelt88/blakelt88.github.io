<?php
function get_product() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY name';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}