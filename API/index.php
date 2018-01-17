<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 13:37
 */
//require_once sprintf("%s/vendor/autoload.php", __DIR__);
//
//use \Psr\Http\Message\ServerRequestInterface as Request;
//use \Psr\Http\Message\ResponseInterface as Response;
//use \Fidmi\Controllers\MainController;
//
//new MainController();
//
//$app = new \Slim\App;
//
//$app->get("/", function (Request $request, Response $reponse, array $args){
//    $ctrl = new MainController();
//
//    $reponse->getBody()->write("YOLO");
//
//    return $reponse;
//});
//
//$app->run();

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Fidmi\Controllers\MainController;

require '../vendor/autoload.php';

//new \Fidmi\Controllers\MainController();

\Fidmi\Models\Database\Connect::getInstance();
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) use ($app) {
    $ctrl = new MainController($request, $response);

    return $ctrl->indexAction($args);
});
$app->run();