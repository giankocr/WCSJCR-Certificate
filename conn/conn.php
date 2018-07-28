<?php
/* 
    Copyright (C) 2016 gianko.com <email://gian@gianko.com>
    @author GianCarlos Villalobos - Gianko.com
 */
class Conexion extends mysqli{
    public function __construct(){
        parent::__construct('localhost','root','','certificados');
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die('Error conexion') : $x = 'Conected';
        #echo $x;
        unset($x);
    }
    public function fetcharray($fa){
        return mysqli_fetch_array($fa);
    }
    public function fetch_assoc($fasoc){
        return mysqli_fetch_assoc($fasoc);
    }
    public function insert($in){
        $db = new Conexion();
        $db->query($in);
    }
    function FetchRow($result) 
    {
	return mysqli_fetch_row($result);
    }


}

class access{
    protected $username;
    protected $useremail;
    public function __construct($username,$useremail){
        $this->name = $username;
        $this->email = $useremail;
    }
    public function login(){
        $db = new Conexion();
        $sql =$db->query("SELECT email,name FROM users  WHERE email = MD5('$this->email') and name='$this->name';");
        $row = $db->fetcharray($sql);
        if( $row['name'] === strtolower($this->name)){
            $db2 = new Conexion();
            $sql2=$db2->query("INSERT INTO prints(date_print,name,count) VALUES ( now(),'$this->name',1);");
            $db2->insert($sql2);
            return $row['name'];
        }else{
        
        }
    }
    }