<?php

class Dbc {

    private function connect()
    {
        try {
            $host = "localhost";
            $dbName = "test";
            $userName = "root";
            $pwd = "";
            $dbc = new PDO("mysql:host=$host;dbname=$dbName", $userName, $pwd);
            return $dbc;

        }
        catch ($PDOException $error)
        {
            print "Error!: " . $error->getMessage() . "<br/>";
        }
    }

}