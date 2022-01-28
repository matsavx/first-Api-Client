<?php

require __DIR__ . '/vendor/autoload.php';


use App\User;
use App\Note;
use App\ApiClient;

//$user = new User('matsavx', '12345');
//$note = new Note('test', 'test description', 1);
$client = new ApiClient('http://127.0.0.1:8000');
//$client->addNote($note);
//$client->addFile(1, "/uploadFiles/unnamed.png");
//$client->deleteFile("82317e5083f8f11ed400ad40f4a199c5.jpg");
$client->getAllFiles(1);