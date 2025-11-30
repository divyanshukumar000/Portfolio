<?php
var_dump($password);         // aap jo type kar rahe ho
var_dump($user['password']); // hash jo DB me hai
var_dump(password_verify($password, $user['password']));
exit;
?>