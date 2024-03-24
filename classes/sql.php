<?php

class SQL {

  public static $getUser = "SELECT user_id, username, password, user_role FROM bookstore.users WHERE username = ?";

  public static $createUser = "INSERT INTO users (username, email, password) VALUES (?,?,?)";

  public static $createNewPath = "INSERT INTO walkroute.paths (path_name, date_created) VAlues (?,?)";

  public static $getPath = "SELECT * FROM walkroute.paths WHERE path_id = ?";


}