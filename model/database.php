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

		public function openConnection() {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)

			if ($this->connection->connect_error) {
			//* Checks if we established a connection or not	
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}			
		}

		public function closeConnection() {
			if (isset($this->connection)) {
			//* isset is used to check if the variable has been set	
				$this->connection->close();
			}
		}

		public function query($string) {

		}

	}

?>