<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 16:57
 */

namespace Fidmi\Models\Entities;


class Message extends entity
{
    /**
     * @var User
     */
    protected $from;
    /**
     * @var User
     */
    protected $to;
    /**
     * @var String
     */
    protected $content;

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @return User
     */
    public function getTo(): User
    {
        return $this->to;
    }

    /**
     * @param User $to
     */
    public function setTo(User $to): void
    {
        $this->to = $to;
    }

    /**
     * @return String
     */
    public function getContent(): String
    {
        return $this->content;
    }

    /**
     * @param String $content
     */
    public function setContent(String $content): void
    {
        $this->content = $content;
    }
}