<?php

class DB{
    private static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=z2singh;charset=utf8', 'z2singh', 'Pleabros');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params){

        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        //$data = $statement->fetchAll();
        //return $data;

    }
}

?>