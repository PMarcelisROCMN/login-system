<?php

phpinfo();

class SignupController 
{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->$uid = $uid; 
        $this->$pwd = $pwd; 
        $this->$pwdRepeat = $pwdRepeat; 
        $this->$email = $uid; 
    }

    private function inputIsEmpty()
    {
        return 
        empty($this->$uid) 
        || empty($this->$pwd) 
        || empty($this->$pwdRepeat) 
        || empty($this->$email);
    }

    private function invalidUid()
    {
        return !preg_match("/^[a-zA-Z0-9]*$/", $this->uid);
    }

    private function invalidEmail() 
    {
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    private function pwdMatch()
    {
        return $this->pwd == $this->pwdRepeat;
    }
}