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
    /**
     * @var Query
     */
    private static $instance;

    private function __construct()
    {
        $this->database = Connect::getInstance();
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function test()
    {
        $sql = "SELECT * FROM USER WHERE `id` = :id";
        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams([":id" => ["value" => 1, "type" => \PDO::PARAM_INT]])
            ->executeRequest();
    }
}