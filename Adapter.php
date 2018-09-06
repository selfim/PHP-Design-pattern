<?php

/**
* 1、新建一个接口 Adapter  然后在这个接口里面申明统一的方法体
*/
interface Adapter
{
    //连接
    function connect($host, $user, $passwd, $dbname);
    //查询
    function query($sql);
    //关闭连接
    function close();
}

/**
* 2、让不同的类去实现这个接口，和重写其抽象方法。
*/
class MySQLi implements Adapter
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}

class Pdo implements Adapter
{


}

//cache