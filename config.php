<?php

//Load dependency classes
require(__DIR__ . '/class/interface/Database.php');
require(__DIR__ . '/class/interface/Action.php');

require(__DIR__ . '/class/database/DBmysql.php');

require(__DIR__ . '/class/Parcel.php');
require(__DIR__ . '/class/Size.php');
require(__DIR__ . '/class/Address.php');
require(__DIR__ . '/class/User.php');

//Set DB connection
define('DB_SERVER_NAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_BASE_NAME', '');
