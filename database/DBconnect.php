<?php
//łączenie z bazą danych
try{

    $dbconnect = new PDO('mysql:host=localhost;dbname=shopee', 'root', '');

} catch(PDOException $e) {
    if (isset($e)) {
       $e ->errorInfo;
    }
}
