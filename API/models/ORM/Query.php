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
        return $this->database->test();

        $sql = "SELECT * FROM user WHERE id = :id";
        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams([":id" => ["value" => 1, "type" => \PDO::PARAM_INT]])
            ->executeRequest();
    }

    public function getEventsListNoFilter()
    {
        $sql = "SELECT
                  `event`.`title`,
                  `event`.`date`,
                  (`event`.`maxGuests` - (
                      SELECT SUM(`registered`.`guestsNum`)
                      FROM `registered`
                      WHERE `registered`.`validated` = TRUE)
                  ) as maxGuests,
                  `user`.`name`
                FROM
                  `location`
                INNER JOIN
                  `user`
                  ON
                    `location`.`id` = `user`.`location`
                INNER JOIN
                  `event`
                  ON
                    `user`.`id` = `event`.`user`
                WHERE
                  `location`.`city` = ':city'
                LIMIT
                  10
                OFFSET
                  0
          ;";
    }

    public function getUsers()
    {
        $sql = "
            SELECT
            `id`,
            `name`,
            `surname`,
            `location`,
            `email`,
            `password`,
            `salt`,
            `whishlist`,
            `file`,
            `bio`,
            `avatarPath`
            FROM
            `user`
        ";

        return $this->database
            ->prepareStmt($sql)
            ->executeRequest();
    }

    public function getUserById($id)
    {
        $sql = "
            SELECT 
            `id` 
            FROM 
            `user` 
            WHERE 
            `id`= :id
        ";

        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams( [':id'=>["value" => $id, "type" => \PDO::PARAM_INT]])
            ->executeRequest();
    }

    public function getEvents()
    {
        $sql = "
            SELECT `id`, `date`, `description`, `inscriptionDeadline`, `userId`, `title`, `maxGuests`, `file`, `picPath` FROM `event`
        ";
        return $this->database
            ->executeRequest();
    }

    public function getEventById($id)
    {
        $sql = "
            SELECT `id`, `date`, `description`, `inscriptionDeadline`, `userId`, `title`, `maxGuests`, `file`, `picPath` FROM `event` WHERE `id`= :id
        ";

        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams( [':id'=>["value" => $id, "type" => \PDO::PARAM_INT]])
            ->executeRequest();
    }

    public function getRanking($id)
    {
        $sql = "
            SELECT `id`, `user`, `score` FROM `ranking` WHERE `id` = :id
        ";

        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams( [':id'=>["value" => $id, "type" => \PDO::PARAM_INT]])
            ->executeRequest();
    }
}
