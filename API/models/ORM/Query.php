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

    private function getData(String $sql, array $params): array
    {
        return $this->database
            ->prepareStmt($sql)
            ->setBindingParams(
                $params
            )
            ->executeRequest();
    }

    public function getEventsList(Int $offset): array
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
                :offset
            ;"
        ;

        return $this->getData($sql, [":offset" => [
                "value" => $offset,
                "type" => \PDO::PARAM_INT
            ]
        ]);
    }

    public function getEvent(String $title)
    {
        $sql = "SELECT
              (`event`.`maxGuests` - (
                SELECT SUM(`registered`.`guestsNum`)
                FROM `registered`
                WHERE `registered`.`validated` = TRUE)
              ) as maxGuests,
              `event`.`date`,
              `event`.`inscriptionDeadline`,
              `user`.`description`,
              `user`.`whishlist`,
              `user`.`name`,
              `tags`.`name` as tags
            FROM
              `event`
            INNER JOIN
              `user`
              ON
                `user`.`id` = `event`.`user`
            INNER JOIN
              `tagsEvent`
               ON 
                `tagsEvent`.`event` = `event`.`id`
            INNER JOIN
              `tag`
              ON
                `tag`.`id` = `tagEvent`.`id`
            WHERE
              `event`.`title` = :title
            ;"
        ;
        return $this->getData($sql, [
            ":title" => [
                "value" => $title,
                "type" => \PDO::PARAM_STR
            ]
        ]);
    }

        /**
         * @note : nouvelle table proposition
         * one to one user
         * persons: Int
         * brings: json_array
         * @note : user_ranking
         * query pour faire la moyenne
         */
    public function getUnvalidatedRegistered(String $title): array
    {
        $sql = "
            SELECT
                (`event`.`maxGuests` - (
                  SELECT SUM(`registered`.`guestsNum`)
                  FROM `registered`
                  WHERE `registered`.`validated` = TRUE)
                ) as maxGuests,
                `event`.`title`,
                `event`.`date`,
                `tag`.`name`,
                `user`.`name`,
                `ranking`.`score`,
                `proposition`.`persons`,
                `proposition`.`brings`,
                AVG(`ranking`.`score`) as score
            FROM
                `event`
            INNER JOIN
                `registered`
                ON
                    `registered`.`event` = `event`.`id`
            INNER JOIN
                `user`
                ON
                    `user`.`id` = `registered`.`user`
            INNER JOIN
                `ranking`
                ON 
                    `ranking`.`user` = `user`.`id`
            INNER JOIN
                `tagsEvent`
                ON
                    `tagsEvent`.`event` = `event`.`id`
            INNER JOIN
                `tag`
                ON
                    `tag`.`id` = `tagsEvent`.`tag`
            INNER JOIN
                `proposition`
                ON
                    `proposition`.`event` = `event`.`id`
            WHERE
                `event`.`title` = :title
            AND 
                `registered`.`validated` = FALSE
            ;"
        ;

        return $this->getData($sql, [
            ":title" => [
                "value" => $title,
                "type" => \PDO::PARAM_STR
            ]
        ]);
    }

    public function eventsByUser(Int $id)
    {
        $sql = "
            SELECT
                `event`.`title`,
                `event`.`title`,
                `event`.`inscriptionDeadline`,
                `user`.`id`
            FROM
                `event`
            INNER JOIN
                `registered`
                ON 
                    `registered`.`user` = `event`.`id`
            WHERE
                `registered`.`user` = :id
            OR 
                `event`.`user` = :id
            ORDER BY
                `event`.`date` ASC
            ;
        ";
        return $this->getData($sql, [
            ":id" => [
                "value" => $id,
                "type" => \PDO::PARAM_INT
            ]
        ]);
    }

    /**
     * @note update schema
     */
    public function userDetails(Int $id)
    {
        $sql = "
            SELECT
                `description`,
                `whishlist`,
                `email`,
                `phone`,
                `location`.`address`,
                `location`.`notes`
            FROM
                `user`
            INNER JOIN
                `location`
                ON 
                    `user`.`location `= `location`.`id`
            WHERE
                `user`.`id `= :id
        ";

        return $this->getData($sql, [
            ":id" => [
                "value" => $id,
                "type" => \PDO::PARAM_INT
            ]
        ]);
    }
}