<?php
class Dog
{
    //不允许类直接实例化或克隆
    private function __construct(){}
    private function __clone(){}
}

class Cat
{
    //不允许类直接实例化或克隆
    private function __construct(){}
    private function __clone(){}
}


class Factory
{

	public static function getInstance($class)
    {
        //类对象的获取方式通过工厂类 产生
        return new $class();
    }


}

//使用
$dog = Factory::getInstance('Dog');
$cat = Factory::getInstance('Cat');