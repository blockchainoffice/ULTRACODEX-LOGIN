<!DOCTYPE html>
<html id="html">
<head>
<meta charset="UTF-8">
<title>#TITLE#</title>
<meta name="viewport" 		content="width=device-width; initial-scale=1.0; maximum-scale=4.0;" />
<meta name="expires" 		content="0" />
<meta name="author" 		content="Ioannis Balasis" >
<meta name="description" 	content="#DESCRIPTION#">
<link rel="stylesheet" 		href="assets/css/login.css" type="text/css" media="screen" />
<link rel="icon" 		href="assets/img/UltraCodex-Icon.ico"/>
</head>
<body>
	<div id="main">
		<header>
		    <img src="assets/img/UltraCodex-Black.png" id="logo">
		    <form method="post" action="?q=1" autocomplete="new-password">
		    	<input name="#IDSEC#" type="password" maxlength="100" class="lgfld bradius" placeholder="ID" value="" autocomplete="new-password" required><br>
		    	<input name="#PWSEC#" type="password" maxlength="100" class="lgfld bradius" placeholder="PASSWORT" value="" autocomplete="new-password" required ><br>
			<input name="#DTSEC#" type="hidden" size="23" maxlength="100" class="bradius" autocomplete="off"><br>
			<button name="s" type="submit" value="1" data-value="#SUBSEC#" class="bradius" id="lgbtn">ANMELDEN</button>
		    </form>
		</header>
	</div>
</body>
</html>
