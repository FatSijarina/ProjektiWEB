<?php
include_once 'personi.php';

class SimpleUser extends Person
{
    
    public function __construct($userid, $fullname,$lastname, $email,$password ,$role)
    {
        parent::__construct($userid, $fullname, $lastname, $email,$password, $role);
        
    }

    public function setSession()
    {
        $_SESSION['fullname'] = $this->getFullName();
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
        
        
    }

    public function getFullName()
    {
        return $this->fullname;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getRole()
    {
        return $this->role;
    }
}
