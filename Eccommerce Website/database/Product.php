<?php

function fetchProduct($table = 'product'){
    include ('DBconnect.php');
    $sql = "SELECT * FROM {$table} ";
    if($table == 'cart'){
        $sql.="WHERE user_id={$_SESSION['userID']}";
    }
    $stmt = $dbconnect->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getProduct($item_id = null, $table = 'product'){
    if(isset($item_id)){
        include ('DBconnect.php');
        $sql = "SELECT * FROM {$table} WHERE item_id={$item_id}";
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}

