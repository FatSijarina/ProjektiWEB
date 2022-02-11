<?php

abstract class Person
{   
    protected $userid;
    protected $fullname;
    protected $lastname;
    protected $email;
    protected $password;
    protected $role;

    function __construct($userid, $fullname,$lastname, $email, $password,$role)
    {   
        $this->userid = $userid;
        $this->fullname = $fullname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();

}