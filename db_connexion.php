<?php
require_once './config/config.php';

class Database
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=". DB_HOST .";port=3306;dbname=". DB_NAME .";", DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            die('Error ' . $e->getMessage());
        }
    }

    public function getDd()
    {
        return $this->db;
    }
}
?>
