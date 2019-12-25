<?php

	require('Database.php');

	/**
	 *
	 */
	class User extends Database
	{
		public $id;
		public $fname;
		public $lname;
		public $username;
		public $email;
		public $password;
		public $country;
		public $gender;
		public $dob;
		public $image;
		public $status;
		public $reg_date;

		public function setData($data)
		{
			if (array_key_exists('user_id', $data)) {
				$this->id = $data['user_id'];
			}
			if (array_key_exists('f_name', $data)) {
				$this->fname = $data['f_name'];
			}
			if (array_key_exists('l_name', $data)) {
				$this->lname = $data['l_name'];
			}
			if (array_key_exists('user_name', $data)) {
				$this->username = $data['user_name'];
			}
			if (array_key_exists('user_email', $data)) {
				$this->email = $data['user_email'];
			}
			if (array_key_exists('user_password', $data)) {
				$this->password = $data['user_password'];
			}
			if (array_key_exists('user_country', $data)) {
				$this->country = $data['user_country'];
			}
			if (array_key_exists('user_gender', $data)) {
				$this->gender = $data['user_gender'];
			}
			if (array_key_exists('user_dob', $data)) {
				$this->dob = $data['user_dob'];
			}
			if (array_key_exists('user_image', $data)) {
				$this->image = $data['user_image'];
			}
			if (array_key_exists('user_status', $data)) {
				$this->status = $data['user_status'];
			}
			if (array_key_exists('user_reg_date', $data)) {
				$this->reg_date = $data['user_reg_date'];
			}
		}


	}
