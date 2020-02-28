<?php

require_once '/opt/lampp/htdocs/design_patterns/MVC/Model/users.php';
require_once '/opt/lampp/htdocs/design_patterns/MVC/Model/DB.php';

class Controller
{   private $db;

    public function __construct()
    {
        $this->db= new DB();
        $this->user= new Users($this->db);
    }

    public function user(){
        $users = $this->user->get();
        return $users;
    }

    public function index(){
        $user= $this->user();
        return require_once '/opt/lampp/htdocs/design_patterns/MVC/View/view.php';
    }

}