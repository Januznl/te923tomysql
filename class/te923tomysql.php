<?php

class TE923ToMysql
{
    private $debug;
    private $mock;
    private $mysql;

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
        //Init Mysql
        $this->mysql = new Mysql();
        $this->mysql->init($server, $user, $password, $database, $te923tool, $debug, $mock);
        
        $this->debug = ($debug === true)? true : false;
        $this->mock  = ($mock  === true)? true : false;
    }



}
