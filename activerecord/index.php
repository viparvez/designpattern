<?php

use Mytutorials\Users\User;

require_once 'app/start.php';

$users = User::find([1]);

echo $users->email;