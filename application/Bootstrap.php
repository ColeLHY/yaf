<?php

/**
 *引导文件
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    static $Dbt;

    public function _initDbt(Yaf_Dispatcher $dispatcher)
    {
        $config = Yaf_Application::app()->getConfig()['database'];
        self::$Dbt = new Medoo\Medoo([
            //必需
            'database_type' => $config['database_type'],
            'database_name' => $config['database_name'],//数据库名称
            'server' => $config['server'],//数据库连接地址
            'username' => $config['username'],//用户名
            'password' => $config['password'],//密码
            'charset' => $config['charset'],//数据库编码
            //[可选的] 数据库连接端口
            'port' => $config['port'],
            // [可选]表前缀
            'prefix' => $config['prefix']
        ]);
    }
}