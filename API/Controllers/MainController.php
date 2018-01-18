<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 17/01/2018
 * Time: 02:09
 */

namespace Fidmi\Controllers;

use Fidmi\Models\Database\Connect;
use Fidmi\Models\Entities\File;
use Psr\Http\Message\ResponseInterface as Response;

class MainController extends Controller
{
    public function indexAction(Int $page = 0) : Response
    {
        return $this->render(
            $this->orm->getHomeEvents($page)
        );
    }

    public function eventAction(String $title): Response
    {
        return $this->render(
            $this->orm->getEvent($title)
        );
    }
}