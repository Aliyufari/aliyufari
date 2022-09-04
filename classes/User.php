<?php
	require 'classes/Database.php';

	class User extends Database
	{
		private $table = 'users';

		public function create($data)
		{
			if ($this->insert($this->table, $data)) {
				return true;
			}
			return false;
		}

		public function login(array $data)
		{
			return $this->select($this->table, $data);
		}

		public function findUser($key)
		{
			return $this->select($this->table, $key);
		}
	}