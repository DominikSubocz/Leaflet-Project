<?php

class Components {
    public static function pageHeader($pageTitle, $stylesheets, $scripts){
        require("components/header.php");

    }

    public static function pageFooter(){
        require("components/footer.php");
    }


    public static function singlePath($path)
    {
      if (!empty($path)) {
        $pathId = Utils::escape($path["path_id"]);
        $pathName = Utils::escape($path["path_name"]);
        $dateCreated = Utils::escape($path["date_created"]);
        $latlngs = Utils::escape($path["latlngs"]);
    
  
        // Output information on a single book
        require("components/path-single.php");
      } else {
        // Output a message if the $paths array is empty
        require("components/no-single-path-found.php");
      }
    }

    public static function allPaths($paths){
      foreach($paths as $path){
        if (!empty($path)) {
          $pathId = Utils::escape($path["path_id"]);
          $pathName = Utils::escape($path["path_name"]);
          $dateCreated = Utils::escape($path["date_created"]);
          $latlngs = Utils::escape($path["latlngs"]);
      
    
          // Output information on a single book
          require("components/path-card.php");
        } else {
          // Output a message if the $paths array is empty
          require("components/no-single-path-found.php");
        }
      }
    }
}