<?php
class Connection {
    public static function connect() {
        try {
            $link = new PDO("mysql:host=localhost;dbname=posystem", "root", "");
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            echo "Error connecting to the database: " . $e->getMessage();
            return null;
        }
    }
}