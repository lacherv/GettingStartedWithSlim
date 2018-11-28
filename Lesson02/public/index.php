<?php
    // Call Request and Response Classes
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    // Setup autoloader
    require __DIR__ . '../../vendor/autoload.php';
    
    // Prepare app
    $app = new \Slim\App();

    // Create a dynamic route
    $app->get('/{name}', function(Request $request, Response $response, array $args){
        $name = $args['name'];
        $response->getBody()->write("Hello $name !!!"); 

        return $response;
    });

    // Run the app
    $app->run();