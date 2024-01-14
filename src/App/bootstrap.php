<?php


declare(strict_types=1);


require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\Homecontroller;

$app = new App();

// $app->get('/');

$app->get('/',[Homecontroller::class,'home']);



return $app;