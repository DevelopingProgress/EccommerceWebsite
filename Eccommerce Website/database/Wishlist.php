<?php
function deleteWishlist($item_id = null, $table = 'wishlist'){

    if($item_id != null){
        include ('DBconnect.php');
        $sql = "DELETE FROM {$table} WHERE item_id={$item_id}";
        $stmt = $dbconnect->prepare($sql);
        $stmt->execute();
        if($stmt){
            header("Location:".$_SERVER['PHP_SELF']);
        }

    }
    return $stmt;
}