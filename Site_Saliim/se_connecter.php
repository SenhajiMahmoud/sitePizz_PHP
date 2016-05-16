<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="css/login.css" />
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>

<script type="text/javascript">
$(function(){
		$("#login_error").hide();
		$("#sub").click(function(){
			if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
				$("#login_error").show();
				return false;
			}
		});
});
</script>

</head>
<body>
	<div id="wrapper">
		<form id="login-form" name="login-form" class="login-form" action="login.php" method="post">
			
			<div class="header">
				<h3>Entrer Votre Login</h3>
			</div>
			<div class="content">
				<input  id="login_name" name="login" type="text" size="40px;"  placeholder="E-mail" />
				<div class="user-icon"></div>
				<input id="login_pass" name="password" type="password" size="40px;" placeholder="Mot de Passe" />
				<div class="pass-icon" ></div>		
			</div>
			<div class="footer">
				<input id="sub" type="submit" name="submit" value="Login" class="button" onclick="window.open.cancel;"/>
				<p id="login_error" style="color: red;">Veuillez remplir les champs</p>
			</div>
		</form>
	</div>
</body>
</html>