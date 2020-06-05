<?php

class dbObj 
{
    
    var $host = 'localhost';
    var $username = 'root';
    var $pass = '';
    var $dbname = 'uts_diena';
    var $con;

    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->pass, $this->dbname);
    }

    function inputData($name, $email, $skor){
        $get_id = mysqli_query($this->con, 'select max(id) as max from hof');
        $id = mysqli_fetch_array($get_id);
        $newid = $id['max'] + 1;

        $query = "insert into hof values('$newid', '$name', '$email', '$skor')";
        mysqli_query($this->con, $query);
    }
}