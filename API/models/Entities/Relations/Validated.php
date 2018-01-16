<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 18:39
 */

namespace Fidmi\Models\Entities\Relations;


use Fidmi\Models\Entities\Entity;

class Validated extends Entity
{
    /**
     * @var Int
     */
    protected $userId;
    /**
     * @var Int
     */
    protected $eventId;
    /**
     * @var Int
     */
    protected $guestsNum;
}