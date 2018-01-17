<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:43
 */

namespace Fidmi\Models\ORM;

use Fidmi\Models\Entities\File;
use Fidmi\Models\Entities\User;

/**
 * Class Orm
 * @package Fidmi\Models\ORM
 * Elegants methods name that call right Buffer's method
 */
class Orm
{
    /**
     * @var Orm
     */
    private static $instance;
    /**
     * @var Buffer
     */
    public $buffer;

    private function __construct(){}

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function test():array
    {
        $data = $this->buffer->test();

        return $data;
    }

    public function getUsers()
    {
        $data = $this->buffer->getUsers();

        return $data;
    }

    public function getUserById($id)
    {
        $data = $this->buffer->getUserById($id);

        return $data;
    }

    public function getEvents()
    {
        $data = $this->buffer->getEvents();

        return $data;
    }

    public function getEventById($id)
    {
        $data = $this->buffer->getEventById($id);

        return $data;
    }

    public function getRanking($id)
    {
        $data = $this->buffer->getRanking($id);

        return $data;
    }

    public function getFile($id)
    {
        $data = $this->buffer->getFile($id);

        return $data;
    }
}
