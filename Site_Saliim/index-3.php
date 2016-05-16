<!DOCTYPE html>
<html lang="en">
<head>
<title>Emploi</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">

<link rel="icon" href="images/logo1.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />

<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
<!--js-->

<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="js/superfish.js"></script>

<style type="text/css">
	.fichier{
		cursor: pointer;
		font-size: 1000px;
		height: 300px;
		position: absolute;
		bottom: 0;
		margin: 0;
		padding: 0;
		right: 0;
	}
	.Divfich{
		display: inline-block;
		position: relative;
		color: #333;
		line-height: 2.28;
		width: 90px;
		text-align: center;
		direction: ltr;
		background: gray;
	}
	
</style>


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

</head>
<body>
<?php 
		session_start();
	?>
<!--==============================header=================================-->
<header>
  <div class="line-top"></div>
   			<div class="Connex">
		  		<?php if(isset($_SESSION['logged']) == '1'){?>	
						<span class="logged"> <?php echo $_SESSION['nom'];?></span>
						<a class="dec" href="Deconn.php" >Deconnexion</a>
					<?php }elseif(isset($_SESSION['logged']) == '0'){?>
		  		
		  		<a class="ins" href="inscription.html" >s'inscrire</a> | 
		  			<a id="tip5" class="ins" href="se_connecter.php" >se_connecter</a>
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
	          <li class="active"><a href="index-3.php">Emploi</a> </li>
	          <li><a href="index-4.php">Commander</a> </li>
	          <li><a href="index-5.php">Contacts</a> </li>
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
<section id="content">
	<div class="ic"></div>
  <div class="border-horiz"></div>

    <div class="main">
	    <h3>Emploi</h3>
	    <figure class="img-indent box-img">
	    	<img src="images/page4-img1.jpg " alt="" />
	    </figure>
	    <form method="post" action="EnvoiFichier.php" enctype="multipart/form-data"> 
			<label for="mon_fichier">Fichier (PDF | max. 2 Mo) :</label><br />    
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152">  
			<input type="file" name="fich" id="fich">    
			<input type="submit" value="Envoyer"> 
		</form>
		<br/><br/><br/>
			
			Nous cherchons un livreur experiment&eacute; &Acirc; li&egrave;ge Belgique<br/>
			Veuillez nous envoy&eacute; un document detaillant toutes vos activit&eacute;s pr&eacute;c&egrave;dantes
	    <div class="clear"></div>
    </div>
   
   <br/><br/><br/>
   
   <div class="container_12">
	   <article class="grid_6">
		   <figure class="img-indent box-img"><img src="images/page4-img2.jpg " alt="" /></figure>
		   </div>   
	   </article>
	   
	   <article class="grid_6">
	   	   <figure class="img-indent box-img"><img src="images/page4-img3.jpg " alt="" /></figure>
	   </article>
	   <div class="clear"></div>
   </div>
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
</body>
</html>
