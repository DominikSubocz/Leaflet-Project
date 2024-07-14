<?php

session_start();

require "classes/components.php";
require("classes/utils.php");
require("classes/path.php");

Components::pageHeader("Path List", ["style"], ["mobile-nav"]);

$userId = $_SESSION["user_id"];

$pathName = "";

$pathNameErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["pathName"])) {
        $pathNameErr = "Path name is required";
    } else {
        $pathName = test_input($_POST["pathName"]);
    }



    if(empty($pathNameErr)){
        $pathId = Path::createNewPath($pathName, $userId);
        header("Location: " . Utils::$projectFilePath . "/path.php?id=$pathId");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<h2>Path List</h2>

<div class="path-list">
    <?php

    $paths = Path::getPaths($userId);
    Components::allPaths($paths);

    ?>

</div>


<br>
<form
    method="POST"
    action="<?php echo $_SERVER["PHP_SELF"];?>" 
    class="form">

    <input type="text" name="pathName" placeholder="Path name: " value="<?php echo $pathName;?>">
    <p class="error"><?php echo $pathNameErr;?></p><br>


    <input class="button" type="submit" name="newPathSubmit" value="Add new path">
</form>


