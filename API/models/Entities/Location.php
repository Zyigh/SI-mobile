<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 16:46
 */

namespace Fidmi\Models\Entities;


class Location extends Entity
{
    /**
     * @var String
     */
    protected $address;
    /**
     * @var String
     */
    protected $notes;
    /**
     * @var String
     */
    protected $phone;
    /**
     * @var String
     */
    protected $city;

    /**
     * @return String
     */
    public function getAddress(): String
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress(String $address): void
    {
        $this->address = $address;
    }

    /**
     * @return String
     */
    public function getNotes(): String
    {
        return $this->notes;
    }

    /**
     * @param String $notes
     */
    public function setNotes(String $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return String
     */
    public function getPhone(): String
    {
        return $this->phone;
    }

    /**
     * @param String $phone
     */
    public function setPhone(String $phone): void
    {
        $this->phone = $phone;
    }
}