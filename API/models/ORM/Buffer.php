<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:09
 */

namespace Fidmi\Models\ORM;


use Fidmi\Models\Entities\Entity;
use Fidmi\Models\Entities\Event;
use Fidmi\Models\Entities\File;
use Fidmi\Models\Entities\Location;
use Fidmi\Models\Entities\Ranking;
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

    public function getEventListNoFilter()
    {
        
    }

    /**
     * @return Entity
     */
    public function getUsers(): array
    {
        $user = $this->query->getUsers();
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

    public function getUserById()
    {
        $user = $this->query->getEventById();
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

    public function getEvents() : array
    {
        $event = $this->query->getEvents();
        $params = [
            "id" => $event["id"],
            "date" => $event["date"],
            "description" => $event["description"],
            "inscriptionDeadline" => $event["inscriptionDeadline"],
            "userId" => $event["userId"],
            "title" => $event["title"],
            "maxGuests" => $event["maxGuests"],
            "file" => $event["file"],
            "picPath" => $event["picPath"]
        ];
        
        return new Event($params);
    }

    public function getEventById()
    {
        $event = $this->query->getEventById();
        $params = [
            "id" => $event["id"],
            "date" => $event["date"],
            "description" => $event["description"],
            "inscriptionDeadline" => $event["inscriptionDeadline"],
            "userId" => $event["userId"],
            "title" => $event["title"],
            "maxGuests" => $event["maxGuests"],
            "file" => $event["file"],
            "picPath" => $event["picPath"]
        ];

        return new Event($params);
    }

    public function getRanking()
    {
        $rank = $this->query->getEvents();
        $params = [
            "id" => $rank["id"],
            "user" => $rank["user"],
            "score" => $rank["score"]
        ];

        return new Ranking($params);
    }
}