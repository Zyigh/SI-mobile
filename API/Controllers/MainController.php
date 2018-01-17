<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 17/01/2018
 * Time: 02:09
 */

namespace Fidmi\Controllers;

use Fidmi\Models\Database\Connect;
use Psr\Http\Message\ResponseInterface as Response;

class MainController extends Controller
{
    public function indexAction(array $args) : Response
    {
        try {
            $data = Connect::getInstance()->prepareStmt("SELECT * FROM user")->executeRequest();
            dump($data);
        } catch (\Exception $e) {
            dump($e);
        }
        exit;
        $data = $this->orm->test();

        return $this->render(
            $data
        );
    }
}