<?php
	class Link {
		private $connection = null;
		
		public function __construct($host, $type, $user, $password, $name) {
			$this -> connection = mysqli_connect($host, $user, $password, $name) or die('Could not stablish connection to database!!!');
		}
		
		public static function createUsingDefaultFile() {
			return self::createUsingSpecifiedFile('config.ini');
			
		}
		
		public static function createUsingSpecifiedFile($file) {
			$data = parse_ini_file($file);
			$host = $data['host'];
			$type = $data['type'];
			$user = $data['user'];
			$password = $data['password'];
			$name = $data['name'];
			return new self($host, $type, $user, $password, $name);
		}
		
		public function __destruct() {
		}
		
		
		public function execute($query) {
			// echo $query;
			$this -> connection -> query($query);
			// echo $this -> connection -> error;
		}
		
		public function getResultSet($query) {
			echo $query;
			/*
			$dataSet = $this -> connection -> query($query);
			if(!empty($dataSet)) {
				while($data = $dataSet -> fetch_assoc())
					$resultSet[] = $data;
				return $resultSet;
			}
			echo '<p>Empty dataset!</p>';
			*/
			return $this -> connection -> query($query);
		}
		
		public function getResult($query) {
			$dataset  = $this -> connection -> query($query);
			if(!empty($dataset))
				return $dataset -> fetch_assoc();
		}
	}
?>
