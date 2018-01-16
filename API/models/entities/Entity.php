<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 13:35
 */

namespace Fidmi\Models\Entities;


class Entity
{
    /**
     * @var Int
     */
    protected $id;

    /**
     * @return Int
     */
    public function getId(): Int
    {
        return $this->id;
    }

    /**
     * @param Int $id
     */
    public function setId(Int $id): void
    {
        $this->id = $id;
    }
}