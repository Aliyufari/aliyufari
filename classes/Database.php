<?php
	class Database
	{

		public static function connect()
		{

			$config = require 'config.php';
			$db_config = $config['database'];

			return (new PDO("mysql:host={$db_config['DB_HOST']};dbname={$db_config['DB_NAME']}", $db_config['DB_USERNAME'], $db_config['DB_PASSWORD']));

		}


		public static function insert($table, array $data)
		{
			$keys = implode(", ", array_keys($data));

			$values = implode("', '", array_values($data));

			$sql = "INSERT INTO {$table} ({$keys}) VALUES ('{$values}')";

			$query = self::connect()->query($sql);

			return $query;
		}

		public static function select($table, array $data){
			$sql = "SELECT * FROM {$table} WHERE (user_name=::username OR user_email=:username) AND user_password=:password";
			$statement = self::connect()->prepare($sql);
			$statement->execute($data);
			$result = $statement->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
	}


	// $table = "users";
	// $data = array(
	// 	'user_name' => 'Tatimu',
	// 	'user_password' => 'tatimu@gmail.com'
	// );
	//
	// $user = new Database();
	//
	// var_dump(Database::select($table, $data));
	// die();

	// $reg = $user->insert($table, $data);

	// if ($reg) {
	// 	echo"Regitered";
	// }
