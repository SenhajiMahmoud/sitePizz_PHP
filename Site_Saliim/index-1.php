<!DOCTYPE html>
<html lang="en">
<head>
<title>Menu</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">

<link rel="icon" href="images/logo1.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />


<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
			
			<!-- Ajouter -->
		<script src="js/jquery.js"></script>
	    <script src="js/jquery-migrate-1.1.1.js"></script>
	    <script src="js/jquery.tabs.min.js"></script>
	    <script src="js/easing.js"></script>
	    
		<script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
		
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


<body>
<?php 
		include 'lib/Database.php';
		session_start();
		
		$db = new Database("localhost", "pizzeria", "root", "");
		
	?>
<!--==============================header=================================-->
<header>
  <div class="line-top" ></div>
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
	          <li class="active"><a href="index-1.php">Menu</a> </li>
	          <li>
	          	<a href="index-2.php">Commentaire_Clients</a>
	          	<ul>
	          		<li ><a href="Commentaire_Client.html" ><span style="font-style: italic; font-size: 12px;">Faire un Commentaire</span></a></li>
	          	</ul>
	          </li>
	          <li><a href="index-3.php">Emploi</a> </li>
	          <li><a href="index-4.php">Commander</a> </li>
	          <li ><a href="index-5.php">Contacts</a> </li>
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
    <div class="grid_12"></div>  
    
    <div class="tabs tb gallery">
             <div class="div-nav">
	             <div class="grid_12">
	                 <ul class="nav" >
	                    <li class="selected"><a href="#tab-1">Pizzas Solo</a></li>
	                    <li ><a href="#tab-2">Pizzas Medium</a></li>
	                    <li ><a href="#tab-3">Pates</a></li>
	                    <li ><a href="#tab-4">Paninis</a></li>
	                    <li ><a href="#tab-5">Snacks</a></li>
	                    <li ><a href="#tab-6">Salades</a></li>
	                    <li ><a href="#tab-7">Boissons</a></li>
	                    <li ><a href="#tab-8">Desserts</a></li>
	                 </ul>
	             </div>    
             </div>
             
            <div class="div-tabs">
            	
            	<div  id="tab-1" class="tab-content gallery1"> 
            
            
            
	                  <h3>Pizza Solo</h3>
	                  <div class="container_12">
	                  <?php 
				      		$rs = $db->chargerNews("pizza");
				      		foreach ($rs as $req){
			      		?>
	                  
		                  <div class="grid_3">
		                    <a href="#" class="gal">
		                    	<img src=<?php echo $req['image'];?> alt="" />
		                    	<span></span>
		                    </a>
			                  <div class="col2">
			                    		<a href="#"><?php echo $req['nom'];?></a>
			                    	 &emsp;
			                    		<?php echo $req['prix'] . "&#x20AC;";?>
			                  </div>
			                  <span class="ingredient">ingredient</span>
		                  </div>
	                  <?php }?>
	                  
	                  </div>
	                  
	              	</p>
	              </div>
	              <div id="tab-2" class="tab-content gallery2">
	                  <h3>Pizzas Medium</h3>
		              
	              </div>
	              
	              
	              
	              
	              
	              
	              <div id="tab-3" class="tab-content gallery2">
	                
	                  <h3>Pates</h3>
		              <p style="text-align: left; margin-left: 450px;">
		                  <span style="color: red;">Bolognaise</span> ....................................................................................7,00&euro;<br/>
		                  <span style="color: red;">A La Parmegiana</span> ...........................................................................7,00&euro;<br/>
		                  <span style="color: red;">Sauce Jambon Cr&Egrave;me</span> ....................................................................7,00&euro;<br/>
		                  <span style="color: red;">Lasagne</span> ...........................................................................................7,00&euro;<br/>
		                  <span style="color: red;">Sauce Arabiata</span> ..............................................................................7,00&euro;<br/>
		                  <span style="color: red;">Fruit De Mer</span> ....................................................................................7,00&euro;<br/>
		                  <span style="color: red;">Sauce Carbonara</span> ...........................................................................7,00&euro;<br/>
		                  <span style="color: red;">4 Fromages</span> .......................................................................................7,00&euro;<br/>
		                  <span style="color: red;">Cannelloni</span> ......................................................................................7,00&euro;<br/>
		                  <span style="color: red;">Au Saumon</span> .......................................................................................7,00&euro;<br/>
		                  <span style="color: red;">Au Thon</span> ............................................................................................7,00&euro;<br/>
		                  
					  </p>
	              </div>
	              <div  id="tab-4" class="tab-content gallery3">
	                  <h3>Paninis</h3>
	                  <p style="text-align: left; margin-left: 450px;">
	                  <span style="color: red;">3 Fromages</span> ....................................................................4,50&euro;<br/>
	                  <div style="font-style: italic; font-size: 10px;">Mozzarella, gorgonzola, taleggio</div><br/>
					  <span style="color: red;">Venezia</span> ........................................................................4,50&euro;<br/>
				      <div style="font-style: italic; font-size: 10px;">mozzarella, tomate, jambon</div><br/>
				      <span style="color: red;">Ch&Egrave;vre</span> ..........................................................................4,50&euro;<br/>
				      <div style="font-style: italic; font-size: 10px;">mozzarella, sauce tomate, ch&Egrave;vre</div><br/>
				      <span style="color: red;">Bolo</span> ...............................................................................4,50&euro;<br/>
				      <div style="font-style: italic; font-size: 10px;">mozzarella, tomate, viande hach&eacute;e</div><br/>
				      <span style="color: red;">Thon</span> .............................................................................4,50&euro;<br/>
				      <div style="font-style: italic; font-size: 10px;">mozzarella, tomate, thon</div><br/>
				      <span style="color: red;">Pain &Agrave; L'ail </span> ..................................................................4,50&euro;<br/>
					  <div style="font-style: italic; font-size: 10px;">mozzarella, ail, taleggio</div><br/>
					  </p>
	              </div>
	              <div id="tab-5" class="tab-content gallery4">
	                 <h3>Snacks</h3>
					 <p style="text-align: left; margin-left: 450px;">
	                  <span style="color: red;">Mozzarella Sticks</span> ....................................................................4,50&euro;<br/>
	                   <span style="font-style: italic; font-size: 10px; margin-left: 50px;">5 b&Acirc;tonnets frits et croquants de mozzarella fondante</span><br/>
					 
	                  <span style="color: red;">6 Chicken Wings</span> .........................................................................4,50&euro;<br/>
				      <span style="color: red;">12 Nuggets</span> ..................................................................................4,50&euro;<br/>
				      <span style="color: red;">Potatoes</span> .....................................................................................4,50&euro;<br/>
				      <span style="font-style: italic; font-size: 10px; margin-left: 200px;">la portion</span><br/>
				      <span style="color: red;">Scampis &Agrave; L'ail</span> ...........................................................................4,50&euro;<br/>
					  <span style="font-style: italic; font-size: 10px; margin-left: 150px;">d&eacute;licieuse entr&eacute;e - la portion</span><br/>
					  <span style="color: red;">6 Nuggets</span> ...................................................................................4,50&euro;<br/>
					  <span style="color: red;">Fondue Fromage</span> ......................................................................4,50&euro;<br/>
					  <span style="font-style: italic; font-size: 10px; margin-left: 150px;">croquettes - la portion</span><br/>
					  <span style="color: red;">Calamars </span> ...................................................................................4,50&euro;<br/>
					  <span style="font-style: italic; font-size: 10px; margin-left: 150px;">beignets frits - la portion</span><br/>
					 </p>
	              </div>
	              <div id="tab-6" class="tab-content gallery5">
	                  <h3>Salades</h3>
		                  <span style="color: red;">Salade Du Sud </span> ................................................................................4,50&euro;<br/>
		                  <div style="font-style: italic; font-size: 10px;">salade, tomates, carotte, oignons, anchois, c&Acirc;pres, thon</div><br/>
						  <span style="color: red;">Salade Mixte </span> ...............................................................................................4,50&euro;<br/>
					      <div style="font-style: italic; font-size: 10px;">salade, tomate, carottes, concombre, fromage, olives</div><br/>
					      <span style="color: red;">Salade Capr&Egrave;se</span> ..........................................................................................4,50&euro;<br/>
					      <div style="font-style: italic; font-size: 10px;">mozzarella, tomates, basilic, huile d'olive, &Eacute;pices</div><br/>
					      <span style="color: red;">Salade Au Saumon</span> ....................................................................................4,50&euro;<br/>
					      <div style="font-style: italic; font-size: 10px;">salade, tomates, saumon fum&Eacute;, oignons</div><br/>
					      <span style="color: red;">Salade Exotique</span> .......................................................................................4,50&euro;<br/>
					      <div style="font-style: italic; font-size: 10px;">salade, tomate, carotte, concombre, ma&Iuml;s, p&Ecirc;che, thon</div><br/>
	              </div>
	              <div  id="tab-7" class="tab-content gallery6">
	                 <h3>Boissons</h3>
	                 <p style="text-align: left; margin-left: 450px;">
	                 	  <span style="color: red;">Coca Cola 33cl</span> ......................................................................................4,50&euro;<br/>
						  <span style="color: red;">Fanta 33cl</span> ...............................................................................................4,50&euro;<br/>
					      <span style="color: red;">Ice Tea 33cl</span> ............................................................................................4,50&euro;<br/>
					      <span style="color: red;">Coca Cola 1.5l</span> .......................................................................................4,50&euro;<br/>
					      <span style="color: red;">Gini</span> ...........................................................................................................4,50&euro;<br/>
			              <span style="color: red;">Eau Min&Eacute;rale 50cl</span> ...............................................................................4,50&euro;<br/>
			              <span style="color: red;">Fanta 1.5l</span> ...............................................................................................4,50&euro;<br/>
			              <span style="color: red;">Coca Cola Z&Eacute;ro 33cl</span> ...........................................................................4,50&euro;<br/>
			              <span style="color: red;">Sprite 33cl</span> ..............................................................................................4,50&euro;<br/>
			              <span style="color: red;">Tropico 33cl</span> ...........................................................................................4,50&euro;<br/>
			              <span style="color: red;">Coca Cola 50cl</span> .......................................................................................4,50&euro;<br/>
			              <span style="color: red;">Eau Gazeuse 33cl</span> ...................................................................................4,50&euro;<br/>
			              <span style="color: red;">Red Bull 33cl</span> ..........................................................................................4,50&euro;<br/>
	             	</p>
	             </div>
	             <div  id="tab-8" class="tab-content gallery6">
	                 <h3>Desserts</h3>
	                 <p style="text-align: left; margin-left: 400px;">
	                 	  <span style="color: red;">Mousse Au Chocolat</span> ......................................................................................4,50&euro;<br/>
						  <span style="color: red;">Tiramisu Au Sp&Eacute;culos</span> ....................................................................................4,50&euro;<br/>
					      <span style="color: red;">Tiramisu Maison</span> ..............................................................................................4,50&euro;<br/>
					      <span style="color: red;">Glace Haagen-dazs 500ml</span> .............................................................................4,50&euro;<br/>
					  </p>
	             </div>
        	</div>
  </div>
    
    
    
    
             
             
             
             
             
             
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
