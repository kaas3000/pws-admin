<!DOCTYPE html>
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
            	{foreach from=$topMenu key=ref item=text}
                <li><a href="{$text}">{$ref}</a></li>
                {/foreach}
                {if $topMenuActiveRef}
                <li><a href="{$topMenuActiveRef}" class="active">{$topMenuActiveText}</a></li>
                {/if}
            </ul>
        </div>
        <div id="middle">
            <div id="left-column">
                <span class="slideMenu leraren">
                	<h2>Leraren</h2>
                	<ul>
                		{foreach from=$arrLeraren item=leraar}
                		<li><label for="{$leraar}">{$leraar}<input type="checkbox" id="{$leraar}" /></label></li>
                		{/foreach}
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

						{section name="afspraken" loop="$leerling"}
<tr onselectstart="return: false;">
								<td>{$leerling[afspraken].tijdVan} - {$leerling[afspraken].tijdTot}</td>
								<td>{$leerling[afspraken].voornaam} {$leerling[afspraken].achternaam}</td>
								<td>{$leerling[afspraken].leraar}</td>
								<td>{$leerling[afspraken].lokaal}</td>
							    <td class="listingMenu">
							    	<input type="checkbox">
							    </td>
							</tr>
	                    {/section}
                        
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
</html>