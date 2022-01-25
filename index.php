<?php

use App\sources\User;
use App\sources\Note;
use App\sources\ApiClient;

$user = new User('matsavx', '12345');
//$note = new Note('test', 'test description', 1);
$client = new ApiClient('http://127.0.0.1:8000');
//$client->addNote($note);
$client->upload($user);