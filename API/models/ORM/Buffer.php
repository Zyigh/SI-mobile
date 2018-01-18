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
use Fidmi\Models\Entities\Tag;
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

    public function getNextTenEvents(Int $offset): array
    {
        $data = $this->query->getEventsList($offset);
        $eventsList = [];
        if (!is_null($data)) {
            foreach ($data as $event) {
                $user = new User(["name" => $event["name"]]);
                $details = [
                    "title" => $event["title"],
                    "date" => $event["date"],
                    "maxGuests" => $event["maxGuests"],
                    "user" => $user->dumpAsArray()
                ];
                $event = new Event($details);
                $eventsList[] = $event->dumpAsArray();
            }
        } else {
            $eventsList["error"] = "No more event";
        }

        return $eventsList;
    }

    public function getSingleEvent(String $title): array
    {
        $data = $this->query->getEvent($title);
        if (!is_null($data)) {
            $user = new User([
                "description" => $data["description"],
                "whishlist" => $data["whishlist"],
                "name" => $data["name"]
            ]);
            $tags = [];
            if (is_array($data["tags"])) {
                foreach ($data["tags"] as $tag) {
                    $tagClass = new Tag(["name" => $tag["name"]]);
                    $tags[] = $tagClass->dumpAsArray();
                }
            } else {
                $tagClass = new Tag(["name" => $data["tags"]]);
                $tags[] = $tagClass->dumpAsArray();
            }

            $event = new Event([
                "maxGuests" => $data["maxGuests"],
                "date" => $data["date"],
                "inscriptionDeadline" => $data["inscriptionDeadline"],
                "user" => $user,
                "tags" => $tags
            ]);
            $event = $event->dumpAsArray();
        } else {
            $event = [
                "error" => "Event doesn't exist"
            ];
        }

        return $event;
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
        $user = new User($params);
        $user = $user->dumpAsArray();
        return $user;
    }
}