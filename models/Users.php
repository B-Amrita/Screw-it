<?php

class Users {
    
    public $username;
    public $password;
    public $user_fn;
    public $user_ln;
    public $email;
    public $dob;
    public $answer_1;
    public $profile_pic;

    function __construct($username, $password, $user_fn, $user_ln, $email, $dob, $answer_1) {

        $this->username = $username;
        $this->password = $password;
        $this->user_fn = $user_fn;
        $this->user_ln = $user_ln;
        $this->email = $email;
        $this->dob = $dob;
        $this->answer_1 = $answer_1;
    }

}
