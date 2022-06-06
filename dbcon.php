<?php

    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\Auth;

    $factory = (new Factory)
        ->withServiceAccount('racoon-ai-firebase-adminsdk-sgxu8-ede3fa7558.json')
        ->withDatabaseUri('https://racoon-ai-default-rtdb.asia-southeast1.firebasedatabase.app/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();

?>