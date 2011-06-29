<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="css/screen.css" rel="stylesheet" media="screen" type="text/css">
    <link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
    <title>Cshar!Collective Sharing</title>

    <META NAME="DESCRIPTION" CONTENT="site web de partage collectif, Web Site for collective Partage">
    <META NAME="ABSTRACT" CONTENT="site web de partage collectif, Web Site for collective Partage">
    <META NAME="KEYWORDS" CONTENT="Sharing,Partage,Collectif,Fichier,Groupe,Collective sharing, partage collectif,">
    <META NAME="REVISIT-AFTER" CONTENT="20 Days">
    <META NAME="ROBOT" CONTENT="Index,Follow">
    <META NAME="RATING" CONTENT="general">
    <METa NAME="AUTHOR" CONTENT="Dahhane Ayyoub">

</head>
<body>
<header>
    <div id="head"></div>
   <a href="#"><div id="banner"></div></a>
    <div id="authentication-link">
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Authent.php';?>
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>


        </div>
</header>

<div id="contener">
<div class="clear"></div>

<section>

   <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Subscribe.php';?>
    
    <div id="separator"></div>
    <article>
        <h2>Qu'est ce que Cshar ?</h2>
        <div id="one" class="contentslider">
			<div class="cs_wrapper">
				<div class="cs_slider">

					<div class="cs_article">
						<h2> <a href="#">Article Number One</a> </h2>
						<a href="#">
							<img src="img/article01.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Hendrerit tincidunt vero vel eorum claritatem. Soluta
							legunt quod qui dolore typi. Vel dolore soluta qui odio
							non. Sollemnes minim eorum feugiat nihil nobis. Gothica
							dolor in legentis nihil quinta.
						</p>
						<p>
							Iriure parum autem putamus lectores duis. Quam sit quis
							me me zzril. Facer etiam in lectores hendrerit etiam.
							Exerci lorem liber tincidunt nostrud decima. Mutationem
							est zzril ipsum facer nobis.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Two</a> </h2>
						<a href="#">
							<img src="img/article02.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Nibh nihil et ex accumsan insitam. Qui lius congue
							hendrerit quam vero. Demonstraverunt molestie ipsum
							magna nobis sequitur. Ex diam euismod quis ii velit.
						</p>
						<p>
							In quam lectores placerat Investigationes illum. Diam
							sollemnes nihil lorem claram consectetuer. Eros nam
							placerat claritas claritatem congue. Adipiscing ut
							clari suscipit nulla habent.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Three</a> </h2>
						<a href="#">
							<img src="img/article03.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Clari eum vel blandit notare quarta. Autem processus
							lectores augue iriure facit. Volutpat aliquip erat
							imperdiet ipsum tation. Typi luptatum ut
							demonstraverunt eros quam. Ut clari consectetuer
							tincidunt liber qui.
						</p>
						<p>
							Modo vel facilisis qui liber est. Eorum Investigationes
							processus adipiscing commodo ea. Id iis claritatem vero
							ea consequat.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Four</a> </h2>
						<a href="#">
							<img src="img/article04.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Iis nostrud claritas quis sed qui. Ut nunc facilisi
							claritatem quinta sit. Assum ii liber diam zzril nobis.
							Qui nibh delenit fiant te illum. Delenit claritas ut
							exerci eros typi.
						</p>
						<p>
							Videntur vel euismod ut eleifend quis. Nobis aliquam
							nunc vero blandit illum. Lius placerat litterarum
							processus quam legere. Accumsan modo non at congue
							duis. Odio duis ut blandit feugait in.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

				</div><!-- End cs_slider -->
			</div><!-- End cs_wrapper -->
		</div><!-- End contentslider -->
		<script type="text/javascript"
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#one').ContentSlider({
					width : '550px',
					height : '300px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
			$(function() {
				$('#two').ContentSlider({
					width : '600px',
					height : '266px',
					speed : 400,
					easing : 'easeOutQuad',
					textResize : true
				});
			});
		</script>
		

    </article>

</section>
<div class="clear"></div>
    </div>
<footer><p>Tous droits r&eacute;s&eacute;rv&eacute;s &agrave; Cshar.com &copy; <?php echo date('Y');?> - <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">WebMaster</a></p></footer>

</body>
</html>