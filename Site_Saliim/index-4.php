<!DOCTYPE html>
<html>
<head>
<title>Commander</title>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>

<!--css-->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="screen">

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
	<!-- WinWinLogo -->


<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Leckerli+One&amp;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Ccyrillic&amp;ver=4.2.2'/>
<link rel='stylesheet' 
	  id='title_googlefonts-css'  
	  href='http://fonts.googleapis.com/css?family=Oswald&amp;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Ccyrillic&amp;ver=4.2.2'
/>


<script type="text/javascript">
</script>


</head>
<body>
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
	          <li><a href="Index.php">Home</a></li>
	          <li><a href="index-1.php">Menu</a> </li>
	          <li>
	          	<a href="index-2.php">Commentaire_Clients</a>
	          </li>
	          <li><a href="index-3.php">Emploi</a> </li>
	          <li class="active"><a href="index-4.php">Commander</a> </li>
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
			          <li><a href="#">Ajouter Pizza</a></li>
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
			        
		         $('.panel-row-style').each(function(){
		     		var $$=$(this);
		     		var onResize=function()
		     		{
		     			$$.css(
		     				{
		     					'margin-left':0
		     					,'margin-right':0
		     					,'padding-left':0
		     					,'padding-right':0
		     				}
		     				);
		     			var rightSpace=fullContainer.outerWidth()-leftSpace-$$.parent().outerWidth();
		     		};
		     			onResize();
		     	}); 
		      }); 
		    </script>
</header>

<!--==============================content=================================-->
<section id="content">
	<div class="ic"></div>
    <div class="grid_12"></div>  
	<h1 class="logo">Win Win </h1>	
	<div class="logo_desc" >
		<h4> Bienvenue chez Pizzeria Win Win</h4>
	</div>	
				
<section class="container">
<div class="panel-row-style padd">
	<div class="panel-grid-cell" id="pgc-1408-0-0" >
			<div class="so-panel widget posText panel-first-child" id="panel-1408-0-0-0">
				 <div class=' image_overlay_content'>          
							<div class="figure">
					            <img src="images/13-600x280.jpg" style="opacity:1; " />          
					            <div class="overlay_content vertical_align_middle" style="text-align:right">
						            <h2 style="font-size: 45px;">
						            	<span style="font-size: 43px;font-weight: 100;color:#E5A468;">FRESH CHEESE</span>
						            	<br><br> 
						            		BURGER
						            </h2>          
					            </div>
							</div>
	        		</div>
	        </div>
	        <div class="so-panel widget posText panel-first-child" id="panel-1408-0-0-1">
		        	<div class=' image_overlay_content' >
						<div class="figure">
			                     <img src="images/25-600x280.jpg" style="opacity:1;" />
								<div class="overlay_content vertical_align_middle" style="text-align:right">
						            <h2 style="font-size: 45px;">
						            	<span style="font-size: 43px;font-weight: 100;color:#86A956;">BEST RECIPES </span>
						            	<br><br> 
						            	SHRIMP
						            </h2>
								</div>
			        	</div>
		          </div>
	         </div>
	</div>
	<div class="panel-grid-cell" id="pgc-1408-0-1" >
		<div class="so-panel widget posText panel-first-child" id="panel-1408-0-1-0">
		<div class=' image_overlay_content' >
		<div class="figure">
	         <img src="images/34-600x280.jpg"/>
			 <div class="overlay_content vertical_align_middle" style="text-align:right">
		          <h2 style="font-size: 45px;">
		          	<span style="font-size: 43px;font-weight: 100;color:#C58560;">BEST CAKE</span>
		          <br><br> 
		          	ITEMS
		          </h2>
			 </div>
         </div>
          </div>
        </div>
      <div class="so-panel widget posText panel-last-child" id="panel-1408-0-1-1">
      <div class=' image_overlay_content'>
			<div class="figure">
	            <img src="images/44-600x280.jpg" style="opacity:1; border-radius:0px;" />
				<div class="overlay_content vertical_align_middle" style="text-align:right">
		            <h2 style="font-size: 45px;">
		            	<span style="font-size: 43px;font-weight: 100;color:#DF7A42;">BEST ROASTED </span>
		            	<br><br> 
		            		CHICKEN
		            </h2>
	            </div>
            </div>
          </div>
      </div>
    </div>
</div>
</section>
</section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!--==============================footer=================================-->
<footer>
  <div class="main">
  	Follow US :
  	<br/>
    <ul class="soc-list">
      <li>
      	<a href="https://www.facebook.com/PizzaWinWin?fref=ts">
      		<img  src="images/icon-1.png">
      	</a>
      </li>
      <li>
      	<a href="#">
      		<img src="images/icon-3.png">
      	</a>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
</footer>
<script type='text/javascript' src='js/scriptss.js'></script>
</body>
</html>
