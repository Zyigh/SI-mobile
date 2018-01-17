<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 14:49
 */

namespace Fidmi\Models\Database;

use \PDO;

class Connect
{
    /**
     * @var \PDO
     */
    private $connexion;
    /**
     * @var \PDOStatement | null
     */
    private $stmt;
    /**
     * @var Connect
     */
    private static $instance;

    private function __construct(String $dbhost, String $dbname, String $dbport, String $dbuser, String $dbpass)
    {
        $pdo_connect = sprintf('mysql:host=%s;dbname=%s;port=%d', $dbhost, $dbname, $dbport);
        $this->connexion = new PDO($pdo_connect, $dbuser, $dbpass);
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self(DBHOST, DBNAME, DBPORT, DBUSER, DB_PASS);
        }

        return self::$instance;
    }

    public function getConnexion(): PDO
    {

        return $this->connexion;
    }

    public function prepareStmt(String $sql = ""): self
    {
        $this->stmt = $this->connexion->prepare($sql);

        return $this;
    }

    public function setBindingParams(array $params = []): self
    {
        foreach ($params as $paramName => $paramValue) {
            $this->stmt->bindValue($paramName, $paramValue["value"], $paramValue["type"]);
        }
        
        return $this;
    }

    public function executeRequest(): array
    {
        $result = [];
        if (!is_null($this->stmt)) {
            $stmt = $this->stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            $this->stmt = null;
        }

        return $result;
    }
}