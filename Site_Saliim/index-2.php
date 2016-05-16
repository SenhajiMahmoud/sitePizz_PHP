<!DOCTYPE html>
<html>
<head>
<title>Commentaires</title>
<meta>
<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">

<link rel="icon" href="images/logo1.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />

<!--js-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="js/superfish.js"></script>



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
<link rel="stylesheet" href="css/CommForm.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
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
  
  <div id="main" class="main">
	    <div class="row-top">
	      <h1><a class="ext" href="index.php"><img alt="" src="images/logo.png"></a></h1>
	      <nav>
	        <ul class="sf-menu">
	          <li ><a href="Index.php">Home</a></li>
	          <li><a href="index-1.php">Menu</a> </li>
	          <li class="active">
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
  <div class="container_12">
    <article class="grid_8">
      <h4>Commentaires des Clients</h4>
    </article>
    <div class="clear"></div>
  </div>
  <br/><br/>
  <?php 
		include 'lib/Database.php';
		include 'lib/ViewCom.php';
		
		$db = new Database("localhost", "pizzeria", "root", "");
		$req = $db->AfficherComm("commentaire");
		$rs = $req->fetchAll();
	?>
		
		
		
		
	<form id="comm_Form" action="AjoutComm.php" method="post" style="padding-left:250px;">
      	 <div class="coll-1">
	            <div class="padEsp">
		              <input id="name" class="input1" type="text" name="nom" size="30" placeholder="Name" />
	            </div>
          </div>
          
	            <div class="padEsp">
		              <input id="email" class="input1" type="text" name="email" size="30" placeholder="E-mail" />
	            </div>
          
              
            <textarea class="message" name="message" placeholder="Message" ></textarea>
            <div class="clear"></div>
          
          <br/>
          
          <div class="btns"> 
        	<input class="btn" value="Clear" type="reset">
        	<input class="btn" value="valider" type="submit" id="envoyer">
        </div>
    </form>
		
		
		
		
		
		<span class="commentairee">
			<?php echo count($rs);?> Commentaires
		</span>
		
		<div class="commTest">
			<?php  foreach ($rs as $k){?>
					<br/>
						<div style="border:solid 3px #DDD;">
							<img width="10%" alt="" src="images/logo1.png">
							<span><strong><?php echo $k['nom']; ?></strong></span> 
							<em><?php echo date('d/m/Y H:i:s',strtotime($k['dateCreation']));?></em><br/>
							<span class="PosEmail"><?php echo $k['Email'];?></span> </br></br>
							<span class="PosComment"><?php echo $k['comment'];?></span> </br>
						</div>
						
			<?php }?>	
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
<script src="js/easing.js" type="text/javascript"></script>
</body>
</html>
