<?php

require("classes/path.php");
$pathId = $_REQUEST["path_id"];
$action = $_REQUEST["action"];



if($action == "update"){
    $waypoints = $_REQUEST["waypoints"];


    // var_dump("I will " . $action . " " . $waypoints . " Path ID: " . $pathId);
    $latlngs = str_replace("LatLng","L.latLng",$waypoints);

    Path::updatePath($latlngs, $pathId);
} else if ($action == "load"){
    $path = Path::loadPath($pathId);

    var_dump($path);
}