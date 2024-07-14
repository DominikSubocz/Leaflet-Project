<?php
require_once("classes/connection.php");
require_once("classes/sql.php");
require_once("classes/utils.php");



class Path{


    public static function createNewPath($pathName, $userId){

        $today = date('Y-m-d');


        $conn = Connection::connect();

        $stmt = $conn->prepare(SQL::$createNewPath);
        $stmt->execute([$pathName, $today, $userId]);
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


    public static function updatePath($latlngs, $pathId){
        $conn = Connection::connect();

        $stmt = $conn->prepare(SQL::$updatePath);
        $stmt->execute([$latlngs, $pathId]);

        $conn = null;
    }

    public static function loadPath($pathId){
        $conn = Connection::connect();

        $stmt = $conn->prepare(SQL::$loadPath);
        $stmt->execute([$pathId]);
        $latlngs = $stmt->fetch();

        $conn = null;

        return $latlngs;
    }

    public static function getPaths($userId){
        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getPaths);
        $stmt->execute([$userId]);

        $paths = $stmt->fetchAll();

        return $paths;

    }

}