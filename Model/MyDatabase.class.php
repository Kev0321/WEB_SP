<?php

/* A class that is used to connect to the database. */
class MyDatabase
{

    /* A private variable that is used to store the connection to the database. */
    private $pdo;

    /* Setting the database connection variables. */
    private $dbhost = "localhost";
    private $dbname = "web";
    private $dbuser = "root";
    private $dbpass = "";

    /**
     * MyDatabase constructor.
     */
    public function __construct()
    {
        /* Creating a new PDO object. */
        $this->pdo = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname}", $this->dbuser, $this->dbpass);
        /* Setting the character encoding to UTF-8. */
        $this->pdo->exec("set names utf8");
        /* Setting the error mode to exception. */
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * It inserts a new row into the table
     * 
     * @param string first_name
     * @param string last_name
     * @param string email varchar(255)
     * @param string day date
     */
    public function insertIntoTable(string $first_name, string $last_name, string $email, string $day)
    {
        $table_name = "customers";

        /* Preventing SQL injection. */
        $q = "INSERT INTO $table_name (first_name, last_name, email, day) VALUES (:first_name, :last_name, :email, :day);";
        $res = $this->pdo->prepare($q);
        $res->bindValue(":first_name", $first_name);
        $res->bindValue(":last_name", $last_name);
        $res->bindValue(":email", $email);
        $res->bindValue(":day", $day);

        if ($res->execute()) {
            // dotaz probehl v poradku
            echo "OK: Uživatel byl přidán do databáze.";
            echo "<br><br>";
        } else {
            // dotaz skoncil chybou
            echo "ERROR: Uložení uživatele se nezdařilo.";
            echo "<br><br>";
        }
    }
}
