<?php

class User
{
    public static function find_all_users()
    {
        global $database;

        $result_set = $database->query("SELECT * FROM users");

        return $result_set;

        // while($row = mysqli_fetch_array($result))
        // {
        //     $id         = $row['id'];
        //     $username   = $row['username'];
        //     $password   = $row['password'];
        //     $firstname  = $row['firstname'];
        //     $lastname   = $row['lastname'];
        // }
    }
}


?>