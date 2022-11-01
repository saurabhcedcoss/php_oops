<?php
// classs with construct
class login
{
    public $username;
    public $password;
    function __construct($user="BLANK USERNAME", $pass="BLANK PASSWORD")
    {
        $this->username = $user;
        $this->password = $pass;
    }
    function get_credentials(){
        echo "Your Username : ".$this->username." and Password : ".$this->password ."<br>";
    }
}
$dispblank = new login();
$dispdata = new login("SAM",12345);
$dispblank->get_credentials();
$dispdata->get_credentials();
?>
