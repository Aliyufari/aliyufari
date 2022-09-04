<?php 
	require 'classes/User.php';

	//Register User

	$messages = [];
	
	if(isset($_POST['signup']))
	{
		$data = [
			'username' => htmlentities(trim($_POST['username'])),
			'email' => htmlentities(trim($_POST['email'])),
			'country' => htmlentities(trim($_POST['country'])),
			'gender' => htmlentities(trim($_POST['gender'])),
			'password' => htmlentities(trim($_POST['password'])),
			'comfirmPassword' => htmlentities(trim($_POST['comfirmPassword']))
		];

		foreach($data as $key => $value)
		{
			if (!empty($value)) 
			{
				if ($key === 'username') 
				{
					$user = (new User())->findUser($key);
					
					if($user)
					{
						$messages['username'] = 'Username already taken!';
					}
				}
				
				if ($key === 'email') 
				{
					$email = (new User())->findUser($key);
					
					if($email)
					{
						$messages['email'] = 'Email already taken!';
					}
				}
				if ($key === 'password') 
				{
					if (strlen($value) > 5) 
					{
						if ($data['comfirmPassword'] !== $data['password']) 
						{
							$messages['password'] = 'Passwords do not match!';
						}
					}
					else
					{
						$messages['password'] = 'Password must be minimum of 6 characters!';
					}
				}

			}
			else
			{
				$messages[$key] = ucwords($key) . ' is required';
			}
		}

		if (empty($messages)) 
		{
			array_pop($data);
			
			if ((new User())->create($data)) 
			{
				header("Location: login.php");
				$messages['success'] = 'Account created successfully!';
			}
		}
	}

	if (isset($_POST['login'])) {
		$data = [
			'username' => htmlentities(trim($_POST['username'])),
			'password' => htmlentities(trim($_POST['password']))
		];

		foreach($data as $key => $value)
		{
			if (empty($value)) 
			{
				$messages[$key] = ucwords($key) . ' is required';
			}
		}

		if (empty($messages)) 
		{	
			$user = (new User())->login($data);
			
			if ($user) 
			{
				$messages['success'] = 'Login successfully!';

				session_start();
				$_SESSION['username'] = $user['username'];
				$_SESSION['email'] = $user['email'];

				header("Location: index.php");
			}
			else
			{
				$messages['error'] = 'Incorrect Username / Password!';
			}
		}
	}

	
