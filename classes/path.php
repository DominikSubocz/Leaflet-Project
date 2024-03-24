<?php
require_once("classes/connection.php");
require_once("classes/sql.php");
require_once("classes/utils.php");



class Path{


    public static function createNewPath($pathName){

        $today = date('Y-m-d');


        $conn = Connection::connect();

        $stmt = $conn->prepare(SQL::$createNewPath);
        $stmt->execute([$pathName, $today]);
        $path = $stmt->fetch();

        return $conn->lastInsertId();

    }

    public static function getPath($pathId){
       
        $conn = Connection::connect();
  
        $stmt = $conn->prepare(SQL::$getPath);
        $stmt->execute([$pathId]);
        $path = $stmt->fetch();
    
        $conn = null;
    
        return $path;
    }

}