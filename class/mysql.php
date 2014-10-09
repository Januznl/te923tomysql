<?php
class Mysql
{
    private $my;
    private $debug;
    private $mock;
    
    /**
     * Initialise app
     * @param string $server
     * @param string $user
     * @param string $password
     * @param string $database
     * @param string $te923tool
     * @param boolean $debug
     * @param boolean $mock
     */
    public function init($server,$user,$password,$database, $te923tool, $debug, $mock)
    {
        @$this->my = new mysqli("localhost", "my_user", "my_password", "world");
        if ($this->my->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
    
        $this->debug = ($debug === true)? true : false;
        $this->mock  = ($mock  === true)? true : false;
    }
    
    
}