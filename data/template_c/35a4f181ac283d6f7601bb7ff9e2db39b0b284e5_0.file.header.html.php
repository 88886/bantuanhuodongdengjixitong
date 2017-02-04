<?php /* Smarty version 3.1.27, created on 2017-02-04 10:32:58
         compiled from "D:\www\bthd\tpl\home\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1066558953d5aa0da11_32523044%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35a4f181ac283d6f7601bb7ff9e2db39b0b284e5' => 
    array (
      0 => 'D:\\www\\bthd\\tpl\\home\\header.html',
      1 => 1449503548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066558953d5aa0da11_32523044',
  'variables' => 
  array (
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58953d5aa30ef1_09312591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58953d5aa30ef1_09312591')) {
function content_58953d5aa30ef1_09312591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1066558953d5aa0da11_32523044';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagetitle']->value)===null||$tmp==='' ? '' : $tmp);?>
-<?php echo $_smarty_tpl->getConfigVariable('site_name');?>
</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('site_keywords');?>
">
  <meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('site_description');?>
">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="stylesheet" href="public/assets/css/amazeui.min.css"/>
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/assets/js/amazeui.ie8polyfill.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <?php echo '<script'; ?>
 src="public/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <!--<![endif]-->
  <?php echo '<script'; ?>
 src="public/assets/js/amazeui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header data-am-widget="header" class="am-header am-header-default">
      <h1 class="am-header-title">
          <a href="#title-link" class=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagetitle']->value)===null||$tmp==='' ? '' : $tmp);?>
</a>
      </h1>
</header>
<?php }
}
?>