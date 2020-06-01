<?php

class student{
    private $userId;
    private $userPass;
    protected $rollNumber;
    public $name;

    public function details($userId,$userPass,$rollNumber,$name){
          echo "user id is private : $userId <br>";
          echo "user password is private : $userPass <br>";
          echo "user rollNumber is protected : $rollNumber <br>";
          echo "user name is public : $name <br>";
    }
}

$obj = new student;
$obj->details('101','abcd1234','12','Ram');

?>
