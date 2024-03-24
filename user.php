<?php

session_start();

require("classes/components.php");
require("classes/utils.php");
require("classes/user.php");

if(!isset($_SESSION["loggedIn"])){
    header("Location: " . Utils::$projectFilePath . "/login.php");
}

$username = Utils::escape($_SESSION["username"]);
$userId = Utils::escape($_SESSION["user_id"]);

Components::pageHeader("$username's Paths", ["style"], ["mobile-nav"]);

?>

<h2><?php echo $username; ?>'s Paths</h2>

<?php

Components::pageFooter();

?>

