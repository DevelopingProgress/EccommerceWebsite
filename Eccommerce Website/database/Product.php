<?php

function fetchProduct($table = 'product'){
    include ('DBconnect.php');
    $sql = "SELECT * FROM {$table}";
    $stmt = $dbconnect->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
