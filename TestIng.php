<?php

class DB
{
    private $username = "root";
    private $password = "012369510";
    private $dbname = "k_link";
    public static PDO $con;
    public function  __construct()
    {
        try {
            self::$con = new PDO("mysql:host=localhost;dbname=$this->dbname", $this->username, $this->password);
            self::$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Failed To Connect" . $e->getMessage();
        }
    }

    public static function query($q): array
    {
        try {
            $query = self::$con->prepare($q);
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            return ["Error" => $e->getMessage()];
        }
    }
}

new DB();
$q = DB::query("SELECT * FROM `users` WHERE id=1 ");
print_r($q);
