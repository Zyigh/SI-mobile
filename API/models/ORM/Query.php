<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:02
 */

namespace Fidmi\Models\ORM;


use Fidmi\Models\Database\Connect;

/**
 * Class Query
 * @package Fidmi\Models\ORM
 * This class' methods are used to write SQL queries and return the execution in Database class
 */
class Query
{
    /**
     * @var Connect
     */
    protected $database;

    public function __construct()
    {
        $this->database = Connect::getInstance();
    }
}