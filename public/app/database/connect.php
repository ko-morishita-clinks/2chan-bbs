<?php

define('DB_USERNAME', 'test_user');
define('DB_PASSWORD', 'test_password');
define('DSN', 'mysql:host=db; dbname=test_db; charset=utf8');

function db_connect() {
    try {
        $dbh = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        exit('DB Connection Error: ' . $e->getMessage());
    }
}

?>
