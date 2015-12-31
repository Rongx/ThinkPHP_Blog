<?php
/**
 * 登陆界面控制器
 */

Class LoginAction extends Action {

	// * 登陆界面
	public function index(){
		$this->display();
	}

	// * 用户登录 表单处理
	public function login(){
		// var_dump($_POST);	
		if (empty($_POST)) {
			$this->error('账号或密码为空！ :(  . . .');// * 没数据传入，返回登陆界面
		}
		if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
			// * 设置SESSION，判断SESSION的值进入首页
			session('login_in_user',$_POST['username']);
			$this->redirect('Admin/Index/index');
		} else {
			$this->error('I not known Who are You ... ...');
		}
		// * 更新最后一次登录的时间和IP地址，并存储在session中
/*	    $data = array(       
       		 'id'=>$user['id'],
       		 'logintime'=>time(),
        	 'loginip'=>get_client_ip(),
	   	);
        M('user')->save($data);//更新$data数据到user表中	   
	    session(C('USER_AUTH_KEY'),$user['id']);
	    session('username',$user['name']);
	    session('logintime',date('Y-m-d H:i:s',$user['logintime']));
	    session('loginip',$user['loginip']);	*/	
	}

}