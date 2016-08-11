<?php
// Define the core paths
require_once("core_paths.php");

// load config file first
require_once(LIB_PATH.'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.'functions.php');

// load core objects
require_once(LIB_PATH.'session.php');
require_once(LIB_PATH.'database.php');

?>
