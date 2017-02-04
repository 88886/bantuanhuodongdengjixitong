<?php /* Smarty version 3.1.27, created on 2017-02-04 10:32:58
         compiled from "D:\www\bthd\tpl\home\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:2816358953d5aa7a993_08893284%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d2b2677eedb7780dbdc6e453412dd741d246d0' => 
    array (
      0 => 'D:\\www\\bthd\\tpl\\home\\footer.html',
      1 => 1449592151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2816358953d5aa7a993_08893284',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58953d5aa831f4_00560731',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58953d5aa831f4_00560731')) {
function content_58953d5aa831f4_00560731 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2816358953d5aa7a993_08893284';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>

  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default " id="">
      <ul class="am-navbar-nav am-cf am-avg-sm-4">
          <li >
            <a href="index.php" class="">
       
                <i class="am-icon-edit"></i>
                <span class="am-navbar-label">我要登记</span>
            </a>
          </li>
          <li >
            <a href="index.php?c=index&m=xg" class="">
                <span class="am-icon-wrench"></span>
                <span class="am-navbar-label">查看修改</span>
            </a>
          </li>
          <li >
            <a href="index.php?c=index&m=all" class="">
                <span class="am-icon-cloud"></span>
                <span class="am-navbar-label">查看全部</span>
            </a>
          </li>
          <li >
            <a href="index.php?c=index&m=user" class="">
                <span class="am-icon-heart"></span>
                <span class="am-navbar-label">个人中心</span>
            </a>
          </li>
      </ul>
  </div>


  <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-miscs ">  
      CopyRight©2014  <?php echo $_smarty_tpl->getConfigVariable('site_name');?>
 Inc.<br>
      技术支持: <a href="http://www.xsdhy.com" target="_blank">消逝的红叶</a>
    </div>
  </footer>

</body>
</html><?php }
}
?>