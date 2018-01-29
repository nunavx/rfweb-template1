<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <!--- 
 ALL CONTENT ARE EDITED AND OWNED BY TITANIUM NETWORK
 Author  : Irfan Eros
 Company : Titanium Network Developements
 Website : http://www.titanium-network.ga/
 Created Date : 10:52 PM 7/16/2014
 !--->
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" >

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Register</title>
<link rel='stylesheet' id='gantry631-css'  href='wp-content/plugins/gantry/css/gantry78b2.css?ver=1.28' type='text/css' media='all' />
<link rel='stylesheet' id='wordpress421-css'  href='wp-content/plugins/gantry/css/wordpress78b2.css?ver=1.28' type='text/css' media='all' />
<link rel='stylesheet' id='wordpress789-css'  href='wp-content/themes/rt_dominion_wp/css/wordpress78b2.css?ver=1.28' type='text/css' media='all' />
<link rel='stylesheet' id='style161-css'  href='wp-content/themes/rt_dominion_wp/css/style178b2.css?ver=1.28' type='text/css' media='all' />
<link rel='stylesheet' id='template100-css'  href='wp-content/themes/rt_dominion_wp/css/template78b2.css?ver=1.28' type='text/css' media='all' />

	<style type="text/css">
		<!--
#rt-main-surround ul.menu li.active > a, #rt-main-surround ul.menu li.active > .separator, #rt-main-surround ul.menu li.active > .item, .rt-article-title span, #rt-main-surround h2.title span {color:#cc0000;}
body a, #rt-main-surround ul.menu a:hover, #rt-main-surround ul.menu .separator:hover, #rt-main-surround ul.menu .item:hover, #rt-top .titlecolor h2.title span, #rt-main-surround h2.title span {color:#cc0000;}
		-->
	</style>

	<script type="text/javascript">//<![CDATA[
window.addEvent('domready', function() {
				var modules = ['rt-block'];
				var header = ['h3','h2','h1'];
				GantryBuildSpans(modules, header);
		

				var switcher = document.id('gantry-viewswitcher');
				if (switcher) {
					switcher.addEvent('click', function(e) {
						e.stop();
						if ('0' == '0') document.id('gantry-viewswitcher').addClass('off');
						else $('gantry-viewswitcher').removeClass('off');
						Cookie.write('dominion-win-switcher', '0');
						window.location.reload();
					});
				}
		            new Fusion('ul.menutop', {
                pill: 0,
                effect: 'slide and fade',
                opacity:  1,
                hideDelay:  500,
                centered:  0,
                tweakInitial: {'x': -6, 'y': 0},
                tweakSubsequent: {'x':  -4, 'y':  -22},
                menuFx: {duration:  200, transition: Fx.Transitions.Sine.easeOut},
                pillFx: {duration:  400, transition: Fx.Transitions.Back.easeOut}
            });
            
});	//]]></script>
</head>
<center>
			            <div class="rt-grid-4 rt-pull-8">
						<form id="form-login" action="index.php" method="post">
					<p>
						<font color=black><label >Username</label></font><br />
						<input type="text" name="login" class="inputbox" alt="username" size="24" />
					</p>
					<p>
						<font color=black><label >Password</label></font><br />
						<input type="password" name="pass" class="inputbox" size="24" alt="password" />
					</p>
					<p>
						<font color=black><label >Confirm Password</label></font><br />
						<input type="password" name="cpass" class="inputbox" size="24" alt="password" />
					</p>
					<p>
						<font color=black><label >E-mail</label></font><br />
						<input type="text" name="mail" class="inputbox" alt="username" size="24" />
					</p>
					<div class="readon"><input type="submit" value="Register" class="button" name="submit" /></div>
			</form>
</div>
</center>
</html>


<?php error_reporting (E_ALL ^ E_NOTICE);
//MSSQL settings
$db_user = 'sa'; // SQL ID
$db_pass = 'Xjjwknjt12'; // SQL PASSWORD 
$db_base = "RF_User"; // SQL BASE name 
$db_host = "127.0.0.1\SQLEXPRESS"; // SQL HOST 

$reg_open = true;

$tabelka = '';

if($reg_open AND isset($_POST['login']))
{

$connectsql=mssql_connect($db_host, $db_user, $db_pass) or die('<center><b>'.$lang_error_cant_connect1.'</b><br />'.$lang_error_cant_connect2.'<br /><br /><a href="index.php" class="btn btn-info">Back</a></center>');

$login = $_POST['login'];
$pw = $_POST['pass'];
$cpw = $_POST['cpass'];
$email = $_POST['mail'];

$login = trim($login);
$pw = trim($pw);
$cpw = trim($cpw);

if(ereg("[^0-9a-zA-Z_-]", $login, $str))
{
echo '<div id="form-login"><ul><li><a>Illegal characters, Username must only contain a-z, A-Z e 0-9</a></li></ul></div>';
}
elseif(ereg("[^0-9a-zA-Z_-]", $pw, $str))
{
echo '<div id="form-login"><ul><li><a>Illegal Characters, Password must only contain a-z, A-Z e 0-9</a></li></ul></div>';
}
elseif(ereg("[^0-9]", $pin, $str))
{
echo '<div id="form-login"><ul><li><a>Illegal Characters, Pin must only numeric</a></li></ul></div>';
}
elseif (empty($login))
{
echo '<div id="form-login"><ul><li><a>Username must be filled</a></li></ul></div>';
}
elseif (empty($pw))
{
echo '<div id="form-login"><ul><li><a>Password must be filled</a></li></ul></div>';
}
elseif (empty($cpw))
{
echo '<div id="form-login"><ul><li><a>Confirm Password must be filled</a></li></ul></div>';
}
elseif (empty($email))
{
echo '<div id="form-login"><ul><li><a>E-mail must be filled.</a></li></ul></div>';
}
elseif (strpos($email,'\''))
{
echo '<div id="form-login"><ul><li><a>E-mail not valid.</a></li></ul></div>';
}
else
{
$login_test = strtolower($login);

$resultx = mssql_query('SELECT * FROM RF_User.dbo.tbl_rfaccount WHERE id = CONVERT(binary,\''.$login.'\')') or die("Query failed '.$resultx.'");

if ((mssql_num_rows($resultx)) > 0)
{
echo '<div id="form-login"><ul><li><a>Try other username.</a></li></ul></div>';
}
elseif (strlen($login) < 4)
{
echo '<div id="form-login"><ul><li><a>Username must be between 4 and 10 chars long and use only letter or number characters.</a></li></ul></div>';
}
elseif (strlen($pw) < 4)
{
echo '<div id="form-login"><ul><li><a>Password must be between 4 and 10 characters.</a></li></ul></div>';
}
elseif (strlen($pw) > 10)
{
echo '<div id="form-login"><ul><li><a>Password must be between 4 and 10 characters.</a></li></ul></div>';
}
elseif (strlen($login) > 10)
{
echo '<div id="form-login"><ul><li><a>Username must be between 4 and 10 chars long and use only letter or number characters.</a></li></ul></div>';
}
elseif ($pw != $cpw)
{
echo '<div id="form-login"><ul><li><a>Password did not match.</a></li></ul></div>';
}
else
{
mssql_query(
"INSERT INTO RF_User.dbo.tbl_rfaccount (id,password,accounttype,birthdate,email) VALUES ((CONVERT(binary, '$login')), (CONVERT(binary, '$pw')),'0', '1/01/1950', '$email');"
)or die('Incorrect Query.<br /><br /><a href="/web2/index.php" class="btn btn-info">Back</a>');
echo '<div id="form-login"><ul><li><a>Congratulations, <b>'.$login.'</b>. Your account has been created.</a></li></ul></div>';
}
}
}
elseif($reg_open)
{
echo $tabelka;
}
else
{
echo '<center>Registration is currently closed. Please try again later<br /></center>';
}
?>