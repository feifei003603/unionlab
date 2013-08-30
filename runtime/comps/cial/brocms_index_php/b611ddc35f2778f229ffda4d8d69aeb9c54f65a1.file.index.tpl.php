<?php /* Smarty version Smarty-3.1.8, created on 2013-08-30 10:13:20
         compiled from "./home/views/cial\projects\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3233651f6221bafbe12-30454857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b611ddc35f2778f229ffda4d8d69aeb9c54f65a1' => 
    array (
      0 => './home/views/cial\\projects\\index.tpl',
      1 => 1377827979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3233651f6221bafbe12-30454857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f6221bc31928_23520900',
  'variables' => 
  array (
    'res' => 0,
    'proName' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f6221bc31928_23520900')) {function content_51f6221bc31928_23520900($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/project.css" type="text/css" />
<body bgcolor="#C0DFFD">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['proName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

         <div class="project_leftBox">
    <table border="0" cellspacing="2" cellpadding="0" width="510" align="center">
        <tr>
          <td class="pageName" colspan="3"><br />
		  &nbsp;<br />		  </td>
        </tr>
        <tr>
          <td width="220" height="150" rowspan="2" align="center" class="subHeader"><img src="../public/uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['proimgurl'];?>
" width="128" height="128" alt="large product photo" border="0" /></td>
          <td width="360" class="subHeader"><li><font size="2" >项目名称：<?php echo $_smarty_tpl->tpl_vars['value']->value['proname'];?>
</font></li><li><font size="2" >项目成员：<?php echo $_smarty_tpl->tpl_vars['value']->value['proteam'];?>
</font></li><li><font size="2" >项目标签：<?php echo $_smarty_tpl->tpl_vars['value']->value['prolabel'];?>
</font></li><li
            ><font size="2" >项目关键字：<?php echo $_smarty_tpl->tpl_vars['value']->value['prokeyword'];?>
</font></li><br />
		  <br />          </td>
        </tr>
        <tr>
          <td valign="top" class="bodyText"><?php echo $_smarty_tpl->tpl_vars['value']->value['prosum'];?>

              <p><strong><a href="../public/uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['prourl'];?>
">[下载]</a></strong></p></td>
        </tr>
        
      </table>
    </div>
<?php } ?>
    
    </div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>