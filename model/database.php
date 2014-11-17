<?php
	//* Classes are used to be called in an instance of an object. 
	class Database {
		//*Global variables
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;

		//* function __construct is used to define a constructor
		public function __construct($host, $username, $path, $database) { //*Local variables 
			$this->host = $host; 
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
	}
?>