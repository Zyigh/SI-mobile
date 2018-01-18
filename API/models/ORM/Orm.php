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

    private function __construct(){
        $this->buffer = new Buffer();
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getEvent(String $title): array
    {
        return $this->buffer->getSingleEvent($title);
    }

    public function getHomeEvents(Int $offset): array
    {
        return $this->buffer->getNextTenEvents($offset);
    }

    public function test():array
    {
        $data = $this->buffer->test();

        return $data;
    }


}