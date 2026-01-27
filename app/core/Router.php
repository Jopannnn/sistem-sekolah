<?php

namespace App\Core;

class Router
{

public function run()
{
   $method = $_SERVER['REQUEST_METHOD'];
   $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($method === 'GET' && $uri == '/students')
        {


            require_once './app/controllers/studentController.php';

            $controller = new \App\Controllers\studentsController();
            $controller->index();
            return;
        }

    
    if ($method === 'GET' && $uri == '/students/create')
        {
            
            require_once './app/controllers/studentController.php';

            $controller = new \App\Controllers\studentsController();
            $controller->create();
           
            return;
        }

    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
}

}

?>