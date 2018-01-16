<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 13:35
 */

namespace Fidmi\Models\Entities;


use Fidmi\Models\ORM\Query;
use Fidmi\Models\ORM\Buffer;

class Entity
{
    /**
     * @var Int
     */
    protected $id;
    /**
     * @var Query
     */
    protected $buffer;

    public function __construct()
    {
        foreach (func_get_args() as $param => $value) {
            $this->{$param} = $value;
        }
        $this->buffer = new Buffer($this);
    }

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