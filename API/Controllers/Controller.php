<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 17/01/2018
 * Time: 03:29
 */

namespace Fidmi\Controllers;


use Fidmi\Models\ORM\Orm;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Controller
{
    /**
     * @var Request
     */
    protected $request;
    /**
     * @var Response
     */
    protected $response;
    /**
     * @var Orm
     */
    protected $orm;

    public function __construct(Request $request, Response $response)
    {
        $this->response = $response;
        $this->request = $request;
        $this->orm = Orm::getInstance();
    }

    protected function render(array $data, Int $status = 200): Response
    {

        return $this->response->withHeader('Content-Type', 'application/json')->withStatus($status)->withJson($data);
    }
}