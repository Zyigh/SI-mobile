<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 17:02
 */

namespace Fidmi\Models\Entities;


class Ranking extends Entity
{
    /**
     * @var User
     */
    protected $user;
    /**
     * @var Int
     */
    protected $score;

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
     * @return Int
     */
    public function getScore(): Int
    {
        return $this->score;
    }

    /**
     * @param Int $score
     */
    public function setScore(Int $score): void
    {
        $this->score = $score;
    }
}