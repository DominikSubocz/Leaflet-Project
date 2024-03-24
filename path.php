<?php

require("classes/components.php");
require("classes/utils.php");
require("classes/path.php");

session_start();

/*
  Attempt to get the id from the URL parameter.
  If it isn't set or it isn't a number, redirect
  to book list page.
*/
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
  header("Location: " . Utils::$projectFilePath . "/book-list.php");
}

if(!isset($_SESSION["loggedIn"])){

  header("Location: " . Utils::$projectFilePath . "/login.php");

}

$path = Path::getPath($_GET["id"]);

// Set the document title to the title and author of the book if it exists
$pageTitle = "Book not found";

if (!empty($path)) {
  $pageTitle = $path["path_name"];
}

Components::pageHeader($pageTitle, ["style"], ["mobile-nav"]);
Components::singlePath($path);
Components::pageFooter();

?>