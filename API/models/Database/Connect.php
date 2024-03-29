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
            self::$instance = new self(DBHOST, DBNAME, DBPORT, DBUSER, DBPASS);
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
            $this->stmt->execute();
            $result = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->stmt = null;
        }
        return $result;
    }

    public function test()
    {
        $sql = "SELECT * FROM `file`";
        $this->prepareStmt($sql);
        return $this->executeRequest();

//        $stmt = $this->connexion->prepare("SELECT * FROM user");
//        $stmt->execute();
//        if ($stmt->errorCode() !== '00000') {
//            throw new \PDOException(debug_backtrace()[1]['class'].'::'
//                .debug_backtrace()[1]['function']);
//        }
//        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}