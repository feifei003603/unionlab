<{ include file="public/header.tpl" }>

<link rel="stylesheet" href="<{$res}>/css/project.css" type="text/css" />
<body bgcolor="#C0DFFD">
<{ foreach $proName as $key=>$value }>

         <div class="project_leftBox">
    <table border="0" cellspacing="2" cellpadding="0" width="510" align="center">
        <tr>
          <td class="pageName" colspan="3"><br />
		  &nbsp;<br />		  </td>
        </tr>
        <tr>
          <td width="220" height="150" rowspan="2" align="center" class="subHeader"><img src="../public/uploads/<{ $value.proimgurl }>" width="128" height="128" alt="large product photo" border="0" /></td>
          <td width="360" class="subHeader"><li><font size="2" >项目名称：<{ $value.proname }></font></li><li><font size="2" >项目成员：<{ $value.proteam }></font></li><li><font size="2" >项目标签：<{ $value.prolabel }></font></li><li
            ><font size="2" >项目关键字：<{ $value.prokeyword }></font></li><br />
		  <br />          </td>
        </tr>
        <tr>
          <td valign="top" class="bodyText"><{ $value.prosum }>
              <p><strong><a href="../public/uploads/<{ $value.prourl }>">[下载]</a></strong></p></td>
        </tr>
        
      </table>
    </div>
<{ /foreach }>
    
    </div>
</body>

<{ include file="public/footer.tpl" }>
