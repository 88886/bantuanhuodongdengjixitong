<?php
	class bthdController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['xh']))&&($_SESSION['xqx']==2)){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=ds&m=index');
			exit;
		}
		public function index(){
//INNER JOIN bthd_xgz ON bthd_data.xid1 = bthd_xgz.xid INNER JOIN bthd_xgz2 ON bthd_data.xid2 = bthd_xgz.x2id
			$sql="SELECT * FROM bthd_data INNER JOIN bthd_tzs ON bthd_data.uid = bthd_tzs.uid INNER JOIN bthd_xgz ON bthd_data.xid1 = bthd_xgz.xid INNER JOIN bthd_xgz2 ON bthd_data.xid2 = bthd_xgz2.x2id order by bthd_data.dtime1";
			$res=DB::findAll($sql);
			VIEW::assign("bthd",$res);

			$sql="SELECT * FROM bthd_xgz";
			$res=DB::findAll($sql);
			VIEW::assign("xgz",$res);


			VIEW::display('bthdlist.html');
		}

		public function data(){
			
			if($_POST['did']){
				DB::update("bthd_data",$_POST,"did ={$_POST['did']}");
				showmessage('修改成功', 'admin.php?c=bthd&m=index');
				exit;
			}else{
				DB::insert("bthd_data",$_POST);
				showmessage('新增成功', 'admin.php?c=bthd&m=index');
				exit;
			}
					
		}

		public function del(){
			DB::del("bthd_data","did= {$_GET['did']}");
			showmessage('删除成功', 'admin.php?c=bthd&m=index');
		}
		public function get(){
			$cate = DB::findone("select * from bthd_data where did= {$_GET['did']}");
			echo json_encode($cate);
		}
	}
?>