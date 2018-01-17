<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:09
 */

namespace Fidmi\Models\ORM;


use Fidmi\Models\Entities\Entity;
use Fidmi\Models\Entities\File;
use Fidmi\Models\Entities\Location;
use Fidmi\Models\Entities\User;

/**
 * Class Buffer
 * @package Fidmi\Models\ORM
 * This class is used to hydrate data we get in Query into Entities
 */
class Buffer
{
    /**
     * @var Entity
     */
    protected $entity;
    /**
     * @var Query
     */
    protected $query;

    public function __construct()
    {
        $this->query = Query::getInstance();
    }

    public function test(): array
    {
        $test_user = $this->query->test();
        $params = [
            "id" => $test_user["id"],
            "name" => $test_user["name"],
            "location" => new Location(["id"=>$test_user["location"]]),
            "email" => $test_user["email"],
            "password" => $test_user["password"],
            "salt" => $test_user["salt"],
            "whishlist" => $test_user["whishlist"],
            "file" => new File(["id" => $test_user["file"]])
        ];

        return $params;
        return new User($params);
    }
}