<?php

class ConnectionDb{
    private static $hostname= "localhost";
    private static $username= "rootgeneral";
    private static $password= "root";
    private static $dbname= "progristo";

    public function connect(){
        $connection= @new mysqli(self::$hostname, self::$username, self::$password, self::$dbname);

        if($connection->connect_error){
            die('no connessioe');
        }else{
            return $connection;
        }
    }

}

?>