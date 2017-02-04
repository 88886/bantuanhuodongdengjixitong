<?php /* Smarty version 3.1.27, created on 2017-02-04 10:32:58
         compiled from "tpl\home\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2257758953d5a996c08_08950957%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f0d0267e2f6a49870425e1ff8d213c7cf92789' => 
    array (
      0 => 'tpl\\home\\login.html',
      1 => 1449829762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2257758953d5a996c08_08950957',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58953d5a9f3688_47924519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58953d5a9f3688_47924519')) {
function content_58953d5a9f3688_47924519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2257758953d5a996c08_08950957';
echo $_smarty_tpl->getSubTemplate ("tpl/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>'首页'), 0);
?>

<fieldset>
<form method="post" class="am-form" action="">
  <label for="email">学号:</label>
  <input type="text" id="xh" name="xh" value="">
  <br>
  <label for="password">密码:</label>
  <input type="password" id="password" name="password" value="">
  <br>
  <label class="am-checkbox">
    <input type="checkbox" id="savapassword" data-am-ucheck>保存密码
  </label>
  <label class="am-checkbox">
    <input type="checkbox" name="xgz" data-am-ucheck><b>学工组同学登陆</b>
  </label>
  <br>
  请注意，原始默认密码为学号。
  <div class="am-cf">
    <button id="login" class="am-btn am-btn-primary">登 录</button>
  </div>
</form>
</fieldset>


<?php echo '<script'; ?>
>
$(function() {
  var store = $.AMUI.store;
  //store.clear()
  if(store.get('xhsava')){
  var xhdata =store.get('xhsava');
  var passworddata =store.get('passwordsava');
  $('#xh').val(xhdata);
  $('#password').val(passworddata);
  }
});

$("#login").click(function() {
  if ($('#savapassword').is(':checked')) {
    var store = $.AMUI.store;
    var xhset =$('#xh').val();
    var passwordset =$('#password').val();
    store.set('xhsava',xhset);
    store.set('passwordsava',passwordset);
  }
});
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>