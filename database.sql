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
  latlngs TEXT
);


-- UPDATE walkroute.users
-- SET user_role = 'Admin'
-- WHERE user_id = 1;