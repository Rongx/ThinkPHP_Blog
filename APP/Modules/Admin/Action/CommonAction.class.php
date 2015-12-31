<?php 
/**
 * 自动运行方法 控制器
 * @Desc 要使用这个自动运行方法需要继承这个CommonAction控制器
 */

Class CommonAction extends Action{
    
    // * 自动运行方法
	Public function _initialize(){
	    //判断SESSION中是否有用户认证识别号
		if(!isset($_SESSION['login_in_user'])){
			$this->redirect('/Admin/Login/index');// * 跳转到登陆界面
		}
/*   
	//判断是否是无需认证的控制器或者是无需认证的动作方法
	$nodeAuth = in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));

    //引用Thinkphp框架的RBAC类进行判断用户是否具有相应的权限
	if (C('USER_AUTH_ON') && !$notAuth) {
		import('ORG.Util.RBAC');
		RBAC::AccessDecision(GROUP_NAME) || $this-> error('没有权限');
	}
*/
  	}
}