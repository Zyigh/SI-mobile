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

    /**
     * @return Entity
     */
    public function getUser(): array
    {
        $user = $this->query->getUser();
        $params = [
            "id" => $user["id"],
            "name" => $user["name"],
            "surname" => $user["surname"],
            "location" => new Location(["id"=>$user["location"]]),
            "email" => $user["email"],
            "password" => $user["password"],
            "salt" => $user["salt"],
            "whishlist" => $user["whishlist"],
            "file" => new File(["id" => $user["file"]]),
            "bio" => $user["bio"],
            "avatarPath" => $user["avatarPath"]

        ];

        return new User($params);
    }
}