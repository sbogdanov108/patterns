<?php

include_once 'User.php';

$user = new User();
$user->load(2);

echo '<pre>';
print_r($user);