<?php
//łączenie z bazą danych
try{

    $dbconnect = new PDO('mysql:host=mariadb105.server663223.nazwa.pl;dbname=server663223_shopee', 'server663223_shopee', 'Kacpereterefere1');

} catch(PDOException $e) {
    if (isset($e)) {
       $e ->errorInfo;
    }
}
