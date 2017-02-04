<?php
	class indexController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['xh']))&&($_SESSION['xqx']==2)){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=index&m=index');
			exit;
		}
		public function index(){
			VIEW::display('index.html');
		}
		public function clearallcache(){
			VIEW::clear_all_cache();
			showmessage('清理缓存成功','admin.php?c=index&m=index');
		}
		public function clearalltemp(){
			VIEW::clear_all_temp();
			showmessage('清理编译文件成功','admin.php?c=index&m=index');
		}
		public function logout(){
			unset($_SESSION['xh']);
			showmessage('退出成功！', 'index.php?c=index&m=login');
		}

	}
?>