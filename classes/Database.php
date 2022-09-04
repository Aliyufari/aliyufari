<?php
	class Database
	{
		private $dbHost = 'localhost';
		private $dbName = 'aablog';
		private $dbPassword = '';
		private $dbUser = 'root';

		private function connect()
		{
			try{
				return (
					new PDO(
						"mysql:host={$this->dbHost};dbname={$this->dbName}",
						 $this->dbUser,
						 $this->dbPassword,
						 [
						 	PDO::ATTR_PERSISTENT => true,
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
						 ]
					)
				);
			}catch(PDOException $e){
				return $e->getMessage();
			}
		}


		public function insert($table, $data)
		{
			$keys = implode(", ", array_keys($data));
			$values = implode("', '", array_values($data));

			$sql = "INSERT INTO {$table} ({$keys}) VALUES ('{$values}')";
			$query = $this->connect()->prepare($sql);
			$result = $query->execute();

			return $result;
		}

		public function select($table, $data = null)
		{
			if ($data != null) 
			{
				if (is_array($data) && sizeof($data) > 1)
				{
					$sql = "SELECT * FROM {$table} WHERE (email OR username) = :username AND password = :password";
					$statement = $this->connect()->prepare($sql);
					$statement->execute($data);
					$result = $statement->fetch(PDO::FETCH_ASSOC);
				} 
				else
				{
					$sql = "SELECT * FROM {$table} WHERE username = :user";

					if ($data === 'email') 
					{
						$sql = "SELECT * FROM {$table} WHERE email = :user";
					}
					
					$statement = $this->connect()->prepare($sql);
					$statement->execute([':user' => $data]);
					$result = $statement->fetch(PDO::FETCH_OBJ);

				}	
			}
			else
			{
				$sql = "SELECT * FROM {$table}";
				$statement = $this->connect()->prepare($sql);
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_OBJ);
			}
			
			return $result;
		}
	}