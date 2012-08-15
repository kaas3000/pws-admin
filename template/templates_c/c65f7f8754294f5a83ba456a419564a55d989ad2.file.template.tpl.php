<?php /* Smarty version Smarty-3.1.8, created on 2012-08-13 23:12:27
         compiled from "template/templates/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1902960104501e8469784a36-32500780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65f7f8754294f5a83ba456a419564a55d989ad2' => 
    array (
      0 => 'template/templates/template.tpl',
      1 => 1344892346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1902960104501e8469784a36-32500780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501e84697cea01_45538313',
  'variables' => 
  array (
    'topMenu' => 0,
    'text' => 0,
    'ref' => 0,
    'topMenuActiveRef' => 0,
    'topMenuActiveText' => 0,
    'arrLeraren' => 0,
    'leraar' => 0,
    'leerling' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501e84697cea01_45538313')) {function content_501e84697cea01_45538313($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link  href="css/admin.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
    <div id="main">
        <div id="header">
            <a href="#" class="logo"><img src="img/logo.gif" width="101" height="29" alt="" /></a>
            <ul id="top-navigation">
            	<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['ref'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value){
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['ref']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
</a></li>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['topMenuActiveRef']->value){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['topMenuActiveRef']->value;?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['topMenuActiveText']->value;?>
</a></li>
                <?php }?>
            </ul>
        </div>
        <div id="middle">
            <div id="left-column">
                <span class="slideMenu">
                	<h2>Leraren</h2>
                	<ul>
                		<?php  $_smarty_tpl->tpl_vars['leraar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['leraar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrLeraren']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['leraar']->key => $_smarty_tpl->tpl_vars['leraar']->value){
$_smarty_tpl->tpl_vars['leraar']->_loop = true;
?>
                		<li><label for="<?php echo $_smarty_tpl->tpl_vars['leraar']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['leraar']->value;?>
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['leraar']->value;?>
" /></label></li>
                		<?php } ?>
                	</ul>
                </span>
            </div>
            
            <div id="center-column">
                <div class="top-bar">
                    <a href="#" class="button">ADD NEW </a>
                    <h1>Contents</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> / <a href="#">Contents</a></div>
                </div>

                <div class="table">
                    <table class="listing" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Tijd</th>
                            <th>Naam</th>
                            <th>Leraar</th>
                            <th>Lokaal</th>
                            <th width="20px">Bewerken</th>
                        </tr>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['name'] = "afspraken";
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['loop'] = is_array($_loop=($_smarty_tpl->tpl_vars['leerling']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["afspraken"]['total']);
?>
<tr onselectstart="return: false;">
								<td><?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['tijdVan'];?>
 - <?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['tijdTot'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['voornaam'];?>
 <?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['achternaam'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['leraar'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['leerling']->value[$_smarty_tpl->getVariable('smarty')->value['section']['afspraken']['index']]['lokaal'];?>
</td>
							    <td class="listingMenu">
							    	<input type="checkbox">
							    </td>
							</tr>
	                    <?php endfor; endif; ?>
                        
                    </table>
                </div>
                <div class="table">
                    <table class="listing" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Header Here</th>
                            <th>Header</th>
                            <th>Head</th>
                            <th>Header</th>
                            <th>Header</th>
                            
                            <th>Head</th>
                            <th>Header</th>
                            <th>Head</th>
                        </tr>
                        <tr>
                            <td class="style1">- Lorem Ipsum </td>
                            <td><img src="/img/add-icon.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style2">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style3">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style1">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style2">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style3">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                        <tr>
                            <td class="style4">- Lorem Ipsum </td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
                            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
                            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
                            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
                        </tr>
                    </table>
                    <div class="select">
                        <strong>Other Pages: </strong>
                        <select>
                            <option>1</option>
                        </select>
                    </div>
                </div>
                <div class="table">
                    <table class="listing form" cellpadding="0" cellspacing="0">
                        <tr>
                            <th class="full" colspan="2">Header Here</th>
                        </tr>
                        <tr>
                            <td width="172"><strong>Lorem Ipsum</strong></td>
                            <td><input type="text" class="text" /></td>
                        </tr>
                        <tr>
                            <td><strong>Lorem Ipsum</strong></td>
                            <td><input type="text" class="text" /></td>
                        </tr>
                        <tr>
                            <td><strong>Lorem Ipsum</strong></td>
                            <td><input type="text" class="text" /></td>
                        </tr>
                        <tr>
                            <td><strong>Lorem Ipsum</strong></td>
                            <td><input type="text" class="text" /></td>
                        </tr>
                    </table>
                </div>
            </div>
			<div id="right-column">
            <strong class="h">Extra Info</strong>
                <div class="box">This is your admin home page. It will give you access to all things within the back end system that you will need to facilitate a smooth operation.</div>
            </div>
        </div>
        <div id="footer"><p>Developed by <a href="http://twitter.com/umutm">Umut Muhaddisoglu</a> 2008. Updated for HTML5/CSS3 by <a href="http://mediagearhead.com">Giles Wells</a> 2010.</p></div>
    </div>
</body>
</html><?php }} ?>