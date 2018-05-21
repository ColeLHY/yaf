<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/20 0020
 * Time: 下午 9:40
 */
class TestController extends Yaf_Controller_Abstract{
    public function indexAction(){
        $data = [[1,'haha'],'测试'];
        $view = $this->getView();
        $view->assign('content','成功');
        $view->assign('data',$data);
    }
    public function showAction(){
        $data = Bootstrap::$Dbt->query("show databases")->fetchAll();
        var_dump($data);
        Yaf_Dispatcher::getInstance()->disableView();
    }
}