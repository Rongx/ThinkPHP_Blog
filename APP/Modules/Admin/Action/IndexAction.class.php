<?php
/**
 * 后台首页 控制器
 */
 
class IndexAction extends CommonAction {
	
	// * 后台首页模型
    public function index(){
    	$this -> display();
    }

    // * 后台内容管理模型
    public function content(){
    	$this -> display();
    }

    // * 后台系统设置管理模型
    public function system(){
    	$this -> display();
    }
}