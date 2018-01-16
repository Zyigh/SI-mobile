<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:09
 */

namespace Fidmi\Models\ORM;


use Fidmi\Models\Entities\Entity;

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
    protected $orm;

    public function __construct()
    {
    }
}