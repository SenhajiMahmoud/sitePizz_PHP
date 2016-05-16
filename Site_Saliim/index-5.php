<?php
//(1) On inclut la classe de Google Maps pour générer ensuite la carte.
require('classPHP/GoogleMapAPI.class.php');

//(2) On crée une nouvelle carte; Ici, notre carte sera $map.
$map = new GoogleMapAPI('map');

//(3) On ajoute la clef de Google Maps.
$map->setAPIKey('AIzaSyAu_j-usCFURA_tQ3sarXMrhMJd5E6QYyQ');
    
//(4) On ajoute les caractéristiques que l'on désire à notre carte.
$map->setWidth("620px");
$map->setHeight("300px");
$map->setCenterCoords ('2', '48');
$map->setZoomLevel (17);
$map->addMarkerByCoords( 5.610745, 50.614344, "<titre de l'infobulle>", "<em>Bienvenue</em> Chez Vous :D", "Pizza WinWin");

//(5) On applique la base XHTML avec les fonctions à appliquer ainsi que le onload du body.
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
		<?php $map->printHeaderJS(); ?>
		<?php $map->printMapJS(); ?>
<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/logo1.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
<!--js-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript">
    $(function(){
	 $('#contact-form').forms({
	  ownerEmail:'#'
	 })
	})
</script>




<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" />
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $("#tip5").fancybox({
	        'autoScale'         : false,
	        'transitionIn'      : 'elastic',
	        'transitionOut'     : 'elastic',
	        'scrolling'			: 'no',
			'titleShow'			: true,
		    });
	});
	</script>

<script src="js/jquery.ui.totop.js"></script>
		<link rel="stylesheet" media="screen,projection" href="css/ui.totop.css" />
		<script>
        $(document).ready(function(){
          $( ".block1" ).mouseover(function() {
            $(this).addClass( "blur" );
          });
          $( ".block1" ).mouseout(function() {
            $(this).removeClass( "blur" );
          });
          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>
</head>
<body onload="onLoad();">
<?php 
		session_start();
	?>
<!--==============================header=================================-->
<header>
  <div class="line-top"></div>
   <div style="margin-left:1100px ; font-family: monospace;">
	  		<?php if(isset($_SESSION['logged']) == '1'){?>	
					<span style='color: blue;'> <?php echo $_SESSION['nom'];?></span>
					<a href="Deconn.php" style="color:red;">Deconnexion</a>
				<?php }elseif(isset($_SESSION['logged']) == '0'){?>
	  		
	  		<span><a href="inscription.html" style="color: red;">s'inscrire</a> </span> | 
	  		<a id="tip5" style="color: red;" href="se_connecter.php" title="login" >se_connecter</a>
	   <?php }?>
	   	
	  </div>
 <div class="main">
	    <div class="row-top">
	      <h1><a class="ext" href="index.php"><img alt="" src="images/logo.png"></a></h1>
	      <nav>
	        <ul class="sf-menu">
	          <li ><a href="Index.php">Home</a></li>
	          <li><a href="index-1.php">Menu</a> </li>
	          <li>
	          	<a href="index-2.php">Commentaire_Clients</a>
	          </li>
	          <li><a href="index-3.php">Emploi</a> </li>
	          <li><a href="index-4.php">Commander</a> </li>
	          <li class="active"><a href="index-5.php">Contacts</a> </li>
	        </ul>
	      </nav>
	    </div>
	  </div>
	  	<br/><br/>
	  		<div class="menu_block">
			    <nav id="bt-menu" class="bt-menu">
			        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
			        <ul>
			          <li ><a href="#">Ajouter Pizza</a></li>
			         <li ><a href="#">Ajouter Produit</a></li>
			         <li ><a href="#">Ajouter une offre</a></li>
			         <li ><a href="#">Meilleures Ventes</a></li>
			         <li ><a href="#">Consulter les Commandes</a></li>
			         <li ><a href="#">Liste Clients</a></li>
			        </ul>
			      </nav>
			</div>
			<script>
		      $(document).ready(function(){ 
		         $(".bt-menu-trigger").toggle( 
		          function(){
		            $('.bt-menu').addClass('bt-menu-open'); 
		          }, 
		          function(){
		            $('.bt-menu').removeClass('bt-menu-open'); 
		          } 
		        ); 
		      }) 
		    </script>
</header>

<!--==============================content=================================-->
<section id="content"><div class="ic"></div>
  <div class="border-horiz"></div>
  <div class="main">
    <h3>Contact Information</h3>
    <div class="box-address">
      <h4>Pizza Win Win.</h4>
      <dl class="address">
       
        <dt>pizza win win 164 ,<br>
          quai des ardennes 4032 ch&Ecirc;n&Eacute;e.</dt>
        <dd> <span>Telephone:</span> 04 269 36 84</dd>
        <dd> E-mail: <a class="mail-1" href="#">sesa_ma@hotmail.fr</a> </dd>
      </dl>
    </div>
    <div class="map box-img">
      <?php $map->printMap(); ?>
      </div>
    <div class="clear"></div>
  </div>
  <div class="box-contact">
    <h3>Contact Form</h3>
    <form id="contact-form">
      <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
      <fieldset>
        <div class="coll-1">
          <div>
            <div class="form-txt">Your Name:</div>
            <label class="name">
              <input type="text">
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">Telephone:</div>
            <label class="phone">
              <input type="tel">
              <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">Email:</div>
            <label class="email">
              <input type="email">
              <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
        </div>
        <div class="coll-2">
          <div>
            <div class="form-txt">Message:</div>
            <label class="message">
              <textarea></textarea>
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="btns"> <a class="btn" data-type="reset">Clear</a> <a class="btn" data-type="submit">send</a> </div>
      </fieldset>
    </form>
  </div>
</section>

<!--==============================footer=================================-->
<footer>
 <div class="main">
  	Follow us in :<br/>
    <ul class="soc-list">
      <li><a href="https://www.facebook.com/PizzaWinWin?fref=ts"><img alt="" src="images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-3.png"></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</footer>
<script src="js/easing.js" type="text/javascript"></script>
</body>
</html>

