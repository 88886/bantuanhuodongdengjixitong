<?php
	class indexController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['xh']))&&(XSDHY::$method!='login')&&(XSDHY::$method!='all')){
				echo "<script>window.location.href='index.php?c=index&m=login'</script>";
				exit;
			}else{

			if((XSDHY::$method!='login')&&(XSDHY::$method!='all')){
				$tzsdata=DB::findone("select * from bthd_tzs where uxh={$_SESSION['xh']}");
				VIEW::assign('tzsdata',$tzsdata);

				$clsdata=DB::findAll("select uclass from bthd_tzs where uid != 1");
				VIEW::assign('clsdata',$clsdata);
			}

			}
		}

		function all(){
			if (isset($_GET['p'])) {
				if (!is_numeric($_GET['p'])) {
					showmessage('恭喜你，你已经触发了本站的安全机制。你的操作涉嫌非法，现将跳转至主页。', 'index.php');
		       		exit;
				}
			}
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=20;
			if($total=mysql_num_rows(DB::query("select * from bthd_data"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'index.php?c=index&m=all');
		       exit;
			}
			$offset=($page-1)*$num;
			$dtime0=12;
			$sql="select * from bthd_data INNER JOIN bthd_tzs ON bthd_data.uid = bthd_tzs.uid INNER JOIN bthd_xgz ON bthd_data.xid1 = bthd_xgz.xid INNER JOIN bthd_xgz2 ON bthd_data.xid2 = bthd_xgz2.x2id where bthd_data.dtime0=$dtime0 order by bthd_data.dtime1 limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("all",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=index&m=all";
				$pages.="<ul data-am-widget=\"pagination\" class=\"am-pagination am-pagination-default\">";
				if($page!=1){
				$pages.="<li class=\"am-pagination-first\"><a href=\"".$allurl."&p=1\">首页</a></li>";
				$pages.="<li class=\"am-pagination-prev\"><a href=\"".$allurl."&p=".($page-1)."\">上一页</a></li>";
				}
				$pages.="<li class=\"am-active\"><span class=\"am-active\">".$page."</span></li>";
				if($page!=$pagenum){
				$pages.="<li class=\"am-pagination-next\"><a href=\"".$allurl."&p=".($page+1)."\">下一页</a></li>";
				$pages.="<li class=\"am-pagination-last\"><a href=\"".$allurl."&p=".$pagenum."\">尾页</a></li>";
				}
				$pages.="</ul>";
			}
			VIEW::assign("page",$pages);
			}
			VIEW::display('all.html');
		}


		function index(){//
			$uid=DB::findResult("select uid from bthd_tzs where uxh={$_SESSION['xh']}");
			$sql="select did from bthd_data where uid=$uid";
			if($res=DB::findResult($sql)){
				showmessage('本月活动已经登记', 'index.php?c=index&m=xg');
			}else{
				VIEW::display('index.html');
			}
		}
		function login(){//
			if ($_POST) {
				if (isset($_POST['xgz']) ){
					$xh=$_POST['xh'];
					$password=$_POST['password'];
					if($res=DB::findone("select * from bthd_xgz where xxh=$xh")){
						if ($res['xpassword']==$password) {
							if ($res['xqx']==2) {
								$_SESSION['xh']=$xh;
								$_SESSION['qx']=$res['xqx'];
								showmessage('登陆成功', 'admin.php?c=index&m=index');
							}else{
								showmessage('登陆成功', 'index.php?c=index&m=all');
							}
							
						}else{
							showmessage('密码错误', 'index.php?c=index&m=login');
						}
					}else{
						showmessage('请输入正确的学号', 'index.php?c=index&m=login');
					}
				}else{
					$xh=$_POST['xh'];
					$password=$_POST['password'];
					if($res=DB::findResult("select upassword from bthd_tzs where uxh=$xh")){
						if ($res==$password) {
							$_SESSION['xh']=$xh;
							$_SESSION['qx']=0;
							showmessage('登陆成功', 'index.php?c=index&m=index');
						}else{
							showmessage('密码错误', 'index.php?c=index&m=login');
						}
					}else{
						showmessage('请输入正确的学号，本系统只为团支书开放', 'index.php?c=index&m=login');
					}
				}
			}else{
				VIEW::display('login.html');
			}	
		}
		function dj(){
			$uid=$_POST['uid'];
			$dtime0=date('m');
			$dtime1=$_POST['dtime1'];
			$dtime2=$_POST['dtime2'];
			$dtime3=$_POST['dtime3'];
			$daddress=$_POST['daddress'];
			$dinfor=$_POST['dinfor'];
			if(isset($_POST['hb'])){
				$dclass=$_POST['hbclass'];
				//$dclass = explode("@", $pieces);
			}else{
				$dclass=$_POST['dclass'];
			}
			$dtjtime=time();
			$dstate=1;
			$tj=array('uid' =>$uid ,'dtime0' =>$dtime0 ,'dtime1' =>$dtime1 ,'dtime2' =>$dtime2 ,'dtime3' =>$dtime3 ,'daddress' =>$daddress ,'dinfor' =>$dinfor ,'dclass' =>$dclass ,'dtjtime' =>$dtjtime , 'dstate' =>$dstate );
			if(DB::insert('bthd_data',$tj)){
				showmessage('登记成功', 'index.php?c=index&m=xg');
			}else{
				showmessage('登记失败，请重新登记', 'index.php?c=index&m=index');
			}
		}
		function xg(){//
			if ($_POST) {
				$uid='uid='.$_POST['uid'];
				$dtime0=date('m');
				$dtime1=$_POST['dtime1'];
				$dtime2=$_POST['dtime2'];
				$dtime3=$_POST['dtime3'];
				$daddress=$_POST['daddress'];
				$dinfor=$_POST['dinfor'];
				$dtjtime=time();
				$dstate=1;
				$tj=array('dtime0' =>$dtime0 ,'dtime1' =>$dtime1 ,'dtime2' =>$dtime2 ,'dtime3' =>$dtime3 ,'daddress' =>$daddress ,'dinfor' =>$dinfor ,'dtjtime' =>$dtjtime , 'dstate' =>$dstate );
				if(DB::update('bthd_data',$tj,$uid)){
					showmessage('修改成功', 'index.php?c=index&m=xg');
				}else{
					showmessage('修改失败', 'index.php?c=index&m=xg');
				}
			}else{
				$uid=DB::findResult("select uid from bthd_tzs where uxh={$_SESSION['xh']}");
				$sql="select did from bthd_data where uid=$uid";
				if($res=DB::findResult($sql)){
					$uid=DB::findResult("select uid from bthd_tzs where uxh={$_SESSION['xh']}");
					$sql="select * from bthd_data where uid=$uid";
					$res=DB::findone($sql);
					VIEW::assign("data",$res);
					VIEW::display('xg.html');
				}else{
					showmessage('本月活动还没有登记', 'index.php?c=index&m=index');
				}
			}
			
		}
		function user(){//
			VIEW::display('user.html');			
		}

		public function logout(){
			unset($_SESSION['xh']);
			showmessage('退出成功！', 'index.php?c=index&m=login');
		}
	}
?>