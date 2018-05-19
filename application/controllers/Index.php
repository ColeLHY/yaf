<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/19 0019
 * Time: 下午 10:16
 */
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction(){
        $this->getView()->assign("content","Ninhao Shijie");
    }
}