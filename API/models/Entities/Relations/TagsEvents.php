<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 17:26
 */

namespace Fidmi\Models\Entities\Relations;
use Fidmi\Models\Entities\Entity;


class TagsEvents extends Entity
{
    /**
     * @var Int
     */
    protected $tagId;
    /**
     * @var Int
     */
    protected $eventId;

    /**
     * @return Int
     */
    public function getTagId(): Int
    {
        return $this->tagId;
    }

    /**
     * @param Int $tagId
     */
    public function setTagId(Int $tagId): void
    {
        $this->tagId = $tagId;
    }

    /**
     * @return Int
     */
    public function getEventId(): Int
    {
        return $this->eventId;
    }

    /**
     * @param Int $eventId
     */
    public function setEventId(Int $eventId): void
    {
        $this->eventId = $eventId;
    }
}