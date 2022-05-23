<?php
require 'Admin.php';
require 'User.php';


$user = new User();

$user->type = new Admin;
echo $user->type->greet();