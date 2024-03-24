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
        $waypoint0 = Utils::escape($path["waypoint_0"]);
        $waypoint1 = Utils::escape($path["waypoint_1"]);
        $waypoint2 = Utils::escape($path["waypoint_2"]);
        $waypoint3 = Utils::escape($path["waypoint_3"]);
        $waypoint4 = Utils::escape($path["waypoint_4"]);
        $waypoint5 = Utils::escape($path["waypoint_5"]);
        $waypoint6 = Utils::escape($path["waypoint_6"]);
        $waypoint7 = Utils::escape($path["waypoint_7"]);
        $waypoint8 = Utils::escape($path["waypoint_8"]);
        $waypoint9 = Utils::escape($path["waypoint_9"]);
        $waypoint10 = Utils::escape($path["waypoint_10"]);
        $waypoint11 = Utils::escape($path["waypoint_11"]);
        $waypoint12 = Utils::escape($path["waypoint_12"]);
        $waypoint13 = Utils::escape($path["waypoint_13"]);
        $waypoint14 = Utils::escape($path["waypoint_14"]);
        $waypoint15 = Utils::escape($path["waypoint_15"]);
        $waypoint16 = Utils::escape($path["waypoint_16"]);
        $waypoint17 = Utils::escape($path["waypoint_17"]);
        $waypoint18 = Utils::escape($path["waypoint_18"]);
        $waypoint19 = Utils::escape($path["waypoint_19"]);
        $waypoint20 = Utils::escape($path["waypoint_20"]);
        $waypoint21 = Utils::escape($path["waypoint_21"]);
        $waypoint22 = Utils::escape($path["waypoint_22"]);
        $waypoint23 = Utils::escape($path["waypoint_23"]);
        $waypoint24 = Utils::escape($path["waypoint_24"]);
        $waypoint25 = Utils::escape($path["waypoint_25"]);
        $waypoint26 = Utils::escape($path["waypoint_26"]);
        $waypoint27 = Utils::escape($path["waypoint_27"]);
        $waypoint28 = Utils::escape($path["waypoint_28"]);
        $waypoint29 = Utils::escape($path["waypoint_29"]);
        $waypoint30 = Utils::escape($path["waypoint_30"]);
        $waypoint31 = Utils::escape($path["waypoint_31"]);
        $waypoint32 = Utils::escape($path["waypoint_32"]);
        $waypoint33 = Utils::escape($path["waypoint_33"]);
        $waypoint34 = Utils::escape($path["waypoint_34"]);
        $waypoint35 = Utils::escape($path["waypoint_35"]);
        $waypoint36 = Utils::escape($path["waypoint_36"]);
        $waypoint37 = Utils::escape($path["waypoint_37"]);
        $waypoint38 = Utils::escape($path["waypoint_38"]);
        $waypoint39 = Utils::escape($path["waypoint_39"]);
        $waypoint40 = Utils::escape($path["waypoint_40"]);
        $waypoint41 = Utils::escape($path["waypoint_41"]);
        $waypoint42 = Utils::escape($path["waypoint_42"]);
        $waypoint43 = Utils::escape($path["waypoint_43"]);
        $waypoint44 = Utils::escape($path["waypoint_44"]);
        $waypoint45 = Utils::escape($path["waypoint_45"]);
        $waypoint46 = Utils::escape($path["waypoint_46"]);
        $waypoint47 = Utils::escape($path["waypoint_47"]);
        $waypoint48 = Utils::escape($path["waypoint_48"]);
        $waypoint49 = Utils::escape($path["waypoint_49"]);        
  
        // Output information on a single book
        require("components/path-single.php");
      } else {
        // Output a message if the $paths array is empty
        require("components/no-single-path-found.php");
      }
    }
}