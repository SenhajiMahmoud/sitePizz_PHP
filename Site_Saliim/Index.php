<!DOCTYPE html>
<html >
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">

<link rel="icon" href="images/logo1.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>

<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<!-- Fancy Light Box -->
<script type="text/javascript">
			$(document).ready(function() {
		    $("#tip5").fancybox({
		        'autoScale'         : false,
		        'transitionIn'      : 'elastic',
		        'transitionOut'     : 'elastic',
		        'scrolling'			: 'no',
				'titleShow'			: true
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
     <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php 
		include 'lib/Database.php';
		session_start();
		
		$db = new Database("localhost", "pizzeria", "root", "");
		
		$rs = $db->chargerNews("News");
		$vente = $db->chargerNews("MVente");
	?>
<!--==============================header=================================-->
<header>
  <div class="line-top"></div>
  	<!-- Connexion -->
<div class="Connex">
	  		<?php if(isset($_SESSION['logged']) == '1'){?>	
					<span class="logged"> <?php echo $_SESSION['nom'];?></span>
					<a class="dec" href="Deconn.php" >Deconnexion</a>
				<?php }elseif(isset($_SESSION['logged']) == '0'){?>
	  		
	  		<a class="ins" href="inscription.html" >s'inscrire</a> | 
	  			<a id="tip5" class="ins" href="se_connecter.php" >se_connecter</a>
	   <?php }?>
</div>
		<!-- Menu Principale -->
<div class="main">
	    <div class="row-top">
	      <h1><a href="index.php"><img alt="" src="images/logo.png"></a></h1>
	      <nav>
	        <ul class="sf-menu">
	          <li class="active"><a href="Index.php">Home</a></li>
	          <li><a href="index-1.php">Menu</a> </li>
	          <li>
	          	<a href="index-2.php">Commentaire_Clients</a>
	          </li>
	          <li><a href="index-3.php">Emploi</a> </li>
	          <li><a href="index-4.php">Commander</a> </li>
	          <li><a href="index-5.php">Contacts</a> </li>
	        </ul>
	      </nav>
	    </div>
</div>
<br/><br/>
	  	<!-- Menu Admin -->
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
		<!-- Script Menu Admin -->	
<script>
	$(document).ready(function(){ 
		$(".bt-menu-trigger").toggle( 
			function(){
		    	$('.bt-menu').addClass('bt-menu-open'); 
		    }, 
		 	function(){
		    	$('.bt-menu').removeClass('bt-menu-open'); 
		    }); 
	}) 
</script>
	<!-- Rafrachir Slider Load js -->
<script>
		$(document).ready(function() {
			$(".ext").on('click',function() {
				$(".main").load("index.php");
			});
		});
</script>
<br/>
  	<!-- ImagesSlider -->
<div id="slider">
		<div class="ws_images">
			<ul>
				<li><img  src="images/slider/1.jpg"  title="Bienvenue A pizza Win_Win" /></li>
				<li><img  src="images/slider/2.jpg" title="Livraison gratuite 7/7 j" /></li>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<a href="#" title="Bienvenue A pizza Win_Win">
					<span><img src="images/slider/tooltips/bass.jpg" alt="Chrysanthemum"/>1</span>
				</a>
				<a href="#" title="Desert">
					<span><img src="images/slider/tooltips/pizz.jpg" alt="Desert"/>2</span>
				</a>
				<a href="#" title="Hydrangeas">
					<span><img src="images/slider/tooltips/pizz2.jpg" alt="Hydrangeas"/>3</span>
				</a>
			</div>
		</div>
		<div class="ws_shadow"></div>
</div>	
	<script type="text/javascript" src="js/wowslider.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!-- Bienvenue -->
  <div class="box-slogan">
    <h3>Bienvenue au Pizza Win Win</h3>
    <p> la fameuse pizza la qualite c'est dans nos pates fraiche</p>
  </div>
</header>
<!--==============================content=================================-->
<section id="content">
  <!-- Offres -->
  	<div class="border-horiz"></div>
  	<!-- Offre Win Win -->
	<div class="container_12 row-1">
		    <h3><span >Offres Win_Win  </span></h3><br/>
		    	<?php 
		      		foreach ($rs as $req){
		      		?>
		    <article class="grid_4 thumbnail-1">
		      	<figure class="box-img"><img src=<?php echo $req['image'];?> alt="" /></figure>
		      	<div style="text-align:center;">
			      	<?php echo $req['Nom'];?>
			      	&emsp;&emsp;&emsp;
			      	<?php 
			      	 echo $req['prix'] . "&#x20AC;";
			      	?>
		      	</div>
		      	<br/>
		      	<p style="text-align:center;font-size:12px;"> <?php echo $req['ingredient']?></p>
		    </article>
		    <?php }?>
		    <div class="clear"></div>
	</div>
  <!-- Meilleures Ventes -->
  	<div class="border-horiz"></div>
	<div class="container_12">
	      <h3><span>Meilleures Ventes</span></h3>
	      <ul >
	         <?php 
	      		foreach ($vente as $req){
	      		?>
	        <li class="floaat">
			       <img src="images/page1-img1.jpg" class="imgg">
			       <div class="centerOffr">
					   	<span style="padding-left:70px;Font-size:20px;">
		      				<?php echo "<span class='hov'>" . $req['Nom']. "<span>"?><br/><br/>
						    <span style="padding-left:120px;"><?php echo $req['prix'] . "&euro;"?></span>
	        			</span>
	        		</div>
	        </li>
	        	 <?php }?>
	      </ul>
	</div>
	<div class="clear"></div>




    
    
    <!-- Horaires -->
      <h3><span>Notre planning</span></h3>
      <blockquote class="quote-1"> 
      	<b>Horaire de Travaille: 10h30->14h00<br/>
      		<span class="horpla">17h00->23h00</span>
      	</b>
      </blockquote>
      <h3><span>Livraison Gratuite 7/7j</span></h3>
      <h3><span>ouvert 7/7j</span></h3>
      <h4 style="color: black;">Salle de plusieurs places</h4>
      <h6>soyez le bienvenue chez vous</h6>
    <div class="clear"></div>
  
</section>

<!--==============================footer=================================-->
<footer>
  <div style="margin-top:120px;" class="main">
    <ul class="soc-list">
      <li><a href="#"><img alt="" src="images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-4.png"></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</footer>
	<script src="js/easing.js" type="text/javascript"></script>
</body>
</html>
