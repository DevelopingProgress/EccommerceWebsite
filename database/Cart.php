<?php
function insertCart($params = null, $table = "cart"){
    include ('DBconnect.php');
    if($params != null){
        //insert into cart
        $columns = implode(',',array_keys($params));
        $values = implode(',', array_values($params));

        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table, $columns, $values);
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}

function addtoCart($user_id, $item_id){

    if(isset($user_id) && isset($item_id)){
        $params = array(
            "user_id" => $user_id,
            "item_id" => $item_id
        );

        insertCart($params);
    }
}

function getSum($arr){
    if(isset($arr)){
        $sum = 0;
        foreach ($arr as $item){
            $sum+= floatval($item[0]);
        }
        return sprintf('%.2f', $sum);
    }
}

function deleteCart($item_id = null, $table = 'cart'){

    if($item_id != null){
        include ('DBconnect.php');
        $sql = "DELETE FROM {$table} WHERE item_id={$item_id}";
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();

    }
    return $stmt;
}

function getCartId($cartArray = null, $key = "item_id"){
    if($cartArray != null){
        $cart_id = array_map(function ($value) use($key){
            return $value[$key];
        }, $cartArray);
        return $cart_id;
    }
}

function rotate($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
    if($item_id != null){
        include ('DBconnect.php');
        $sql = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
        $sql.="DELETE FROM {$fromTable} WHERE item_id={$item_id};";
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();


    }
    return $stmt;
}

function clearCart($table = 'cart'){

        include ('DBconnect.php');
        $sql = "DELETE FROM {$table}";
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();

}