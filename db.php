<?php
	/**
	* Class Database
	* Created by Menno van den Ende
	*/
	class Database
	{
		
		private $conn;

		function __construct() {
			// Create database connection
			$this->conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
			// Check connection
			if ($this->conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
		}

		// Run a query
		function query($sql, $returnId = false) {
			$result = $this->conn->query($sql);
			if ($returnId && $result === TRUE) {
				return $this->conn->insert_id;
			} else {
				return $result;
			}
			
		}
	}
?>