<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 16:38
 */

namespace Fidmi\Models\Entities;


class Event extends Entity
{
    /**
     * @var Int
     */
    protected $date;
    /**
     * @var Int
     */
    protected $inscriptionDeadline;
    /**
     * @var String
     */
    protected $description;
    /**
     * @var User
     */
    protected $user;
    /**
     * @var String
     */
    protected $title;
    /**
     * @var Int
     */
    protected $maxGuests;
    /**
     * @var File
     */
    protected $file;
    /**
     * @var array
     */
    protected $registered = [];
    /**
     * @var array
     */
    protected $validated = [];
    /**
     * @var array
     */
    protected $tags = [];

    /**
     * @return File
     */
    public function getFile(): File
    {
        return $this->file;
    }

    /**
     * @param File $file
     */
    public function setFile(File $file): void
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function getRegistered(): array
    {
        return $this->registered;
    }

    /**
     * @param array $registered
     */
    public function addRegistered(array $registered): void
    {
        $this->registered[] = $registered;
    }

    /**
     * @return array
     */
    public function getValidated(): array
    {
        return $this->validated;
    }

    /**
     * @param array $validated
     */
    public function addValidated(array $validated): void
    {
        $this->validated[] = $validated;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function addTags(array $tags): void
    {
        $this->tags[] = $tags;
    }

    /**
     * @return Int
     */
    public function getDate(): Int
    {
        return $this->date;
    }

    /**
     * @param Int $date
     */
    public function setDate(Int $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Int
     */
    public function getInscriptionDeadline(): Int
    {
        return $this->inscriptionDeadline;
    }

    /**
     * @param Int $inscriptionDeadline
     */
    public function setInscriptionDeadline(Int $inscriptionDeadline): void
    {
        $this->inscriptionDeadline = $inscriptionDeadline;
    }

    /**
     * @return String
     */
    public function getDescription(): String
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(String $description): void
    {
        $this->description = $description;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return String
     */
    public function getTitle(): String
    {
        return $this->title;
    }

    /**
     * @param String $title
     */
    public function setTitle(String $title): void
    {
        $this->title = $title;
    }

    /**
     * @return Int
     */
    public function getMaxGuests(): Int
    {
        return $this->maxGuests;
    }

    /**
     * @param Int $maxGuests
     */
    public function setMaxGuests(Int $maxGuests): void
    {
        $this->maxGuests = $maxGuests;
    }
}