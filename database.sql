DROP DATABASE IF EXISTS walkroute;
CREATE DATABASE walkroute;

CREATE TABLE walkroute.users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(32) UNIQUE NOT NULL,
  email VARCHAR(128) NOT NULL,
  password VARCHAR(60) NOT NULL,
  user_role VARCHAR(24) NOT NULL DEFAULT "Member"
);

CREATE TABLE walkroute.paths (
  path_id INT PRIMARY KEY AUTO_INCREMENT,
  path_name TEXT NOT NULL,
  date_created DATETIME NOT NULL,
  waypoint_0 VARCHAR(30),
  waypoint_1 VARCHAR(30),
  waypoint_2 VARCHAR(30),
  waypoint_3 VARCHAR(30),
  waypoint_4 VARCHAR(30),
  waypoint_5 VARCHAR(30),
  waypoint_6 VARCHAR(30),
  waypoint_7 VARCHAR(30),
  waypoint_8 VARCHAR(30),
  waypoint_9 VARCHAR(30),
  waypoint_10 VARCHAR(30),
  waypoint_11 VARCHAR(30),
  waypoint_12 VARCHAR(30),
  waypoint_13 VARCHAR(30),
  waypoint_14 VARCHAR(30),
  waypoint_15 VARCHAR(30),
  waypoint_16 VARCHAR(30),
  waypoint_17 VARCHAR(30),
  waypoint_18 VARCHAR(30),
  waypoint_19 VARCHAR(30),
  waypoint_20 VARCHAR(30),
  waypoint_21 VARCHAR(30),
  waypoint_22 VARCHAR(30),
  waypoint_23 VARCHAR(30),
  waypoint_24 VARCHAR(30),
  waypoint_25 VARCHAR(30),
  waypoint_26 VARCHAR(30),
  waypoint_27 VARCHAR(30),
  waypoint_28 VARCHAR(30),
  waypoint_29 VARCHAR(30),
  waypoint_30 VARCHAR(30),
  waypoint_31 VARCHAR(30),
  waypoint_32 VARCHAR(30),
  waypoint_33 VARCHAR(30),
  waypoint_34 VARCHAR(30),
  waypoint_35 VARCHAR(30),
  waypoint_36 VARCHAR(30),
  waypoint_37 VARCHAR(30),
  waypoint_38 VARCHAR(30),
  waypoint_39 VARCHAR(30),
  waypoint_40 VARCHAR(30),
  waypoint_41 VARCHAR(30),
  waypoint_42 VARCHAR(30),
  waypoint_43 VARCHAR(30),
  waypoint_44 VARCHAR(30),
  waypoint_45 VARCHAR(30),
  waypoint_46 VARCHAR(30),
  waypoint_47 VARCHAR(30),
  waypoint_48 VARCHAR(30),
  waypoint_49 VARCHAR(30)
);


-- UPDATE walkroute.users
-- SET user_role = 'Admin'
-- WHERE user_id = 1;