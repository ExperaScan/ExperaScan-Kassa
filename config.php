<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//Database configuration
	define("DB_SERVER", "localhost");
	define("DB_NAME", "0894225");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");

	require "db.php";
	$database = new Database();

	define("SELLER_ID", 1);
?>