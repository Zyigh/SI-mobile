<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 13:37
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Fidmi\Controllers\MainController;

require '../vendor/autoload.php';

//new \Fidmi\Controllers\MainController();

\Fidmi\Models\Database\Connect::getInstance();
$app = new \Slim\App;
$app->get('/home', function (Request $request, Response $response) {
    $ctrl = new MainController($request, $response);

    return $ctrl->indexAction();
});
$app->get('/home/{page}', function (Request $request, Response $response, array $args) {
    $ctrl = new MainController($request, $response);

    return $ctrl->indexAction($args["page"]);
});
$app->get('/event/{title}', function (Request $request, Response $response, array $args) {
    $ctrl = new MainController($request, $response);

    return $ctrl->eventAction($args["title"]);
});
$app->run();