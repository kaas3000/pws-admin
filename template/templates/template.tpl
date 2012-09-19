<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <link href="css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript" src="js/sortMenus.js"></script>
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
                
                <span class="slideMenu lokalen">
                	<h2>Lokalen</h2>
                	<ul>
                		{foreach from=$arrLokalen item=lokaal}
                		<li><label for="{$lokaal}">{$lokaal}<input type="checkbox" id="{$lokaal}" /></label></li>
                		{/foreach}
                	</ul>
                </span>
                
                <span class="slideMenu tijden">
                	<h2>Tijden</h2>
                	<ul>
                		<li><label for="vroeg"><span>Vroeg</span><input type="checkbox" id="vroeg" /></label></li>
                		<li><label for="midden"><span>Midden</span><input type="checkbox" id="midden" /></label></li>
                		<li><label for="laat"><span>Laat</span><input type="checkbox" id="laat" /></label></li>
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
<tr id="{$leerling[afspraken].id}">
								<td class="{$leerling[afspraken].tijdClass}">{$leerling[afspraken].tijdVan} - {$leerling[afspraken].tijdTot}</td>
								<td id="{$leerling[afspraken].leerling_ID}">{$leerling[afspraken].voornaam} {$leerling[afspraken].achternaam}</td>
								<td>{$leerling[afspraken].leraar}</td>
								<td>{$leerling[afspraken].lokaal}</td>
							    <td class="listingMenu">
							    	<input type="checkbox">
							    </td>
							</tr>
	                    {/section}
                        
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