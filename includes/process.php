<?php

require("../classes/User.php");

//Insert user
if (isset($_POST['signup'])) {
  $data = array(
    'user_name' => $_POST['user-name'],
    'user_email' => $_POST['user-email'],
    'user_country' => $_POST['country'],
    'user_gender' => $_POST['gender'],
    'user_password' => $_POST['user-password']
  );

  $table = "users";
  $user = new User();
  $user->setData($data);
  $register = $user->insert($table, $data);
  if ($register) {
    echo "Record Inserted";
  }
}
