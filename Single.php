<?php
class Single{
    //私有化构造方法，禁止外部实例化对象
    private function __construct(){}
    //私有化__clone，防止对象被克隆
    private function __clone(){}
    //私有化内部实例化的对象
    private static $instance = null;
    // 公有静态实例方法
    public static function getInstance(){
        if(self::$instance == null){
            //内部实例化对象
            self::$instance = new self();    
        }
        return self::$instance;
    }
}