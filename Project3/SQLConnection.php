<?php

namespace Project3\Connection{

	final class SQLConnection
	{
		/**
		 * @var Singleton
		 */
		private static $instance;
		
		private $conn ;
	  
		

		/**
		 * gets the instance via lazy initialization (created on first usage)
		 */
		public static function getInstance()
		{
			if (null === self::$instance)
			{
				self::$instance = new SQLConnection();
			}
			return self::$instance;
		}
		
		public function getConnection()
		{
			if($this->conn === null){
				die( "Connection is not exist! ");
			}
			else if (!$this->conn) { // Check connection
				die( "Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully" ;
			return $this->conn;
		}
		
		public function setConnection($host, $username, $password)
		{
			if ($this->conn === null) { // Check connection
				$this->conn = mysqli_connect($host, $username, $password);
			}
			else{
				echo "Connection is already exist" ;
			}
		}


		/**
		 * is not allowed to call from outside to prevent from creating multiple instances,
		 * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
		 */
		private function __construct()
		{
			
		}

		/**
		 * prevent the instance from being cloned (which would create a second instance of it)
		 */
		private function __clone()
		{
		}

		/**
		 * prevent from being unserialized (which would create a second instance of it)
		 */
		private function __wakeup()
		{
		}
	}
}