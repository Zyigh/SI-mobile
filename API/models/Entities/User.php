<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 16:28
 */

namespace Fidmi\Models\Entities;

class User extends Entity
{
    /**
     * @var String
     */
    protected $name;
    /**
     * @var String
     */
    protected $surname;
    /**
     * @var Location
     */
    protected $location;
    /**
     * @var String
     */
    protected $email;
    /**
     * @var String
     */
    protected $password;
    /**
     * @var String
     */
    protected $salt;
    /**
     * @var array
     */
    protected $whishlist;
    /**
     * @var array
     */
    protected $ranking = [];
    /**
     * @var array
     */
    protected $comments = [];
    /**
     * @var File
     */
    protected $file;
    /**
     * @var array
     */
    protected $messages = [];

    protected $avatarPath;
    protected $bio;


    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(String $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getSurname(): String
    {
        return $this->surname;
    }

    /**
     * @param String $surname
     */
    public function setSurname(String $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return String
     */
    public function getEmail(): String
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(String $email): void
    {
        $this->email = $email;
    }

    /**
     * @return String
     */
    public function getPassword(): String
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(String $password): void
    {
        $this->password = $password;
    }

    /**
     * @return String
     */
    public function getSalt(): String
    {
        return $this->salt;
    }

    /**
     * @param String $salt
     */
    public function setSalt(String $salt): void
    {
        $this->salt = $salt;
    }

    /**
     * @return array
     */
    public function getWhishlist(): array
    {
        return $this->whishlist;
    }

    /**
     * @param array $whishlist
     */
    public function setWhishlist(array $whishlist): void
    {
        $this->whishlist = $whishlist;
    }

    /**
     * @return array
     */
    public function getRanking(): array
    {
        return $this->ranking;
    }

    /**
     * @param Ranking $ranking
     */
    public function addRanking(Ranking $ranking): void
    {
        $this->ranking[] = $ranking;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param array $comments
     */
    public function setComments(array $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return File
     */
    public function getFile(): File
    {
        return $this->image;
    }

    /**
     * @param File $image
     */
    public function setFile(File $image): void
    {
        $this->image = $image;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     */
    public function addMessages(array $messages): void
    {
        $this->messages[] = $messages;
    }

}