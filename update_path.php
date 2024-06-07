<?php

require("classes/path.php");
$pathId = $_REQUEST["path_id"];
$action = $_REQUEST["action"];



if($action == "update"){
    $waypoints = $_REQUEST["waypoints"];

    Path::updatePath($waypoints, $pathId);

    var_dump($waypoints);

} else if ($action == "load"){
    $paths = Path::loadPath($pathId);

    echo($paths[0]);

}