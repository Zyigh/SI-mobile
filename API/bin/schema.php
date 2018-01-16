<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 16/01/2018
 * Time: 23:33
 */

require_once sprintf("%s/../conf.php", __DIR__);
$sql = sprintf("CREATE DATABASE IF NOT EXISTS `%s` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
", DBNAME);
$pdo_connect = sprintf('mysql:host=%s;port=%d', DBHOST, DBPORT);
try {
    $pdo = new PDO($pdo_connect, DBUSER, DBPASS);
    $pdo->exec($sql);
} catch (\Exception $e) {
    die($e->getMessage());
}

$sql = file_get_contents(sprintf("%s/assets/fidmi.sql", __DIR__));
try {
    $pdo_connect = sprintf('mysql:host=%s;dbname=%s;port=%d', DBHOST, DBNAME,DBPORT);
    $pdo = new PDO($pdo_connect, DBUSER, DBPASS);
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (\Exception $e) {
    die($e->getMessage());
}