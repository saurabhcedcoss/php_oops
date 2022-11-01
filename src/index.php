<?php
// classs without construct
class login
{
    public $username = "BLANK USERNAME";
    public $password = "BLANK PASSWORD";
    function get_credentials(){
        echo "Your Username : ".$this->username." and Password : ".$this->password;
    }
}
$disp = new login();
$disp->username="SAM";
$disp->password=12345;
$disp->get_credentials();
?>
