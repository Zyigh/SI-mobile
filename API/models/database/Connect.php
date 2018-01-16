<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 14:49
 */

namespace Fidmi\Models;

use \PDO;

class Connect
{
    /**
     * @var \PDO
     */
    private $connexion;
    private $stmt;
    private static $instance;
    private $params = [];

    private function __construct(String $dbhost, String $dbname, String $dbport, String $dbuser, String $dbpass)
    {
        $pdo_connect = sprintf('mysql:host=%s;dbname=%s;port=%d', $dbhost, $dbname, $dbport);
        $this->connexion = new PDO($pdo_connect, $dbuser, $dbpass);
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self(DB_HOST, DB_NAME, DB_PORT, DB_USER, DB_PASS);
        }

        return self::$instance;
    }

    public function getConnexion(): PDO
    {

        return $this->connexion;
    }

    public function prepareStmt(String $stmt = ""): self
    {
        $this->stmt = $this->connexion->prepare($stmt);

        return $this;
    }

    public function setBindingParams(Array $params = []): self
    {
        foreach ($this->params as $paramName => $paramValue) {
            $this->stmt->bindValue($paramName, $paramValue["value"], $paramValue["type"]);
        }
        
        return $this;
    }

    public function executeRequest(): Array
    {
        $result = [];
        if (!is_null($this->stmt)) {
            $stmt = $this->stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            $this->params = [];
            $this->stmt = null;
        }

        return $result;
    }
}