<?php /* Smarty version Smarty-3.1.8, created on 2013-07-29 16:05:14
         compiled from "./admin/views/default\projects\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3270651f6223a7fef86-73870735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4033d586e751692b48bc6c7a45145b92f89b4148' => 
    array (
      0 => './admin/views/default\\projects\\add.tpl',
      1 => 1375084736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3270651f6223a7fef86-73870735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f6223a8a3c09_18077967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f6223a8a3c09_18077967')) {function content_51f6223a8a3c09_18077967($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->项目管理->添加项目</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="projects" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					
					<li class="light-row">
						<span class="col_width">项目名字&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proName" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">项目描述</span>
						<textarea class="text-box" name="proSum" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于400个汉字.
					</li>
				

					<li class="light-row">
                                            <span class="col_width">项目人员&nbsp;<span class = "red_font">*</span></span>
						<input type="text" class="text-box" name="proTeam" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
                                        <li class="dark-row">
                                            <span class="col_width">项目标签&nbsp;<span class = "red_font">*</span></span>
						<input type="text" class="text-box" name="proLabel" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
					<li class="light-row">
						<span class="col_width">项目关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proKeyword" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
" maxlength="20">&nbsp;&nbsp;用于项目搜索,多个请用逗号","隔开.
					</li>
		<li class="dark-row">
						<span class="col_width" style="float:left;">项目相关图片 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="pic[]" ><br>
						</span>
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp; </span>
						&nbsp;<a href="javascript:addpic()">继续添加</a>&nbsp;<b>↓</b>
						<span id="del" style="display:none">&nbsp;&nbsp;<a href="javascript:delpic()">减少一个</a>&nbsp;<b>↑</b></span>
					</li>
					<script>
						var picobj=document.getElementById("apic");
						var del=document.getElementById("del");
						var i=0;
						function addpic(){
							i++;
							if(i==1)
								del.style.display="inline";   										

							var file=document.createElement("input");
							file.type="file";
							file.name="pic[]";
							var br=document.createElement("br");
							picobj.appendChild(file);	
							picobj.appendChild(br);
						
						}
						function delpic(){
							i--;
							if(i==0)
								del.style.display="none";   
							picobj.removeChild(picobj.lastChild);
							picobj.removeChild(picobj.lastChild);
						}
					</script>
                                        <li class="dark-row">
                                            <span class="col_width" style="float:left;">上传项目文件 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="projects[]" ><br>
						</span>
                                            
                                        </li>
					
	
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>