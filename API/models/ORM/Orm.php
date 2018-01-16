<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 19:43
 */

namespace Fidmi\Models\ORM;

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
}