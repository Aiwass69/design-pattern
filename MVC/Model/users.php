<?php

class Users{
    private $db;

    public function __construct($db)
    {
        $this->db= $db;
    }

    function get(){
    return $this->db->select("SELECT * FROM `users` ORDER BY id ASC ");
  }
}
