<?php

class Photo extends Db_object
{
    protected static $db_table = "photos";
    protected static $db_table_fields = array('photo_id', 'title', 'description', 'filename', 'type', 'size');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
}

?>