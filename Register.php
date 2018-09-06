<?php
//注册器模式：用来将一些对象注册到全局的注册树上，可以在任何地方访问
class Register{

	protected static $objects;
    //注册 将对象映射到全局树上
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }
    //获取 注册到树上的对象
    static function get($key)
    {
        if (!isset(self::$objects[$key]))
        {
            return false;
        }
        return self::$objects[$key];
    }
    //注销
    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

}