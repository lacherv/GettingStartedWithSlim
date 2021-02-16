<?php
    // Setup autoloader
    require __DIR__ . '../../vendor/autoload.php';
    
    // Prepare app
    $app = new \Slim\App();

    // Create a route
    $app->get('/', function($request, $response){
        $response->write("Hello lacherv !!!"); // Instance of Hello World !!!
        return $response;
    });

    // Run the app
    $app->run();