<?
	// HOME PAGE

	// page vars
	$page_meta = array(
		"title" => "Home",
		"keywords" => "",
		"description" => ""
	);
	$body_class = array(
		"page" => "pg_home",
		"site_section" => "home",
		"layout" => ""
	);
	include("includes/header.php");
?>
		<section class="banner block">
			<div class="slider_container">
			<?php
				for( $i = 1; $i <= 10; $i++ ) {
				?>
				<div class="slide block">
					<div class="image"><img src="http://placehold.it/2800x900" /></div><!--/image-->
					<div class="text">
						<div class="container">
							<h3>Title <?php echo $i; ?></h3>
							<h4>Subtitle</h4>
							<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
							<a class="button" href="#">Learn More</a>
						</div><!--/container-->
					</div><!--/text-->
				</div><!--/slide-->
				<?php
				}
			?>
			</div><!--/slider_container-->
		</section><!--/banner-->
		<section class="banner block">
			<div class="slider_container">
			<?php
				for( $i = 1; $i <= 10; $i++ ) {
				?>
				<div class="slide block">
					<div class="image"><img src="http://placehold.it/2800x900" /></div><!--/image-->
					<div class="text">
						<div class="container">
							<h3>Title <?php echo $i; ?></h3>
							<h4>Subtitle</h4>
							<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
							<a class="button" href="#">Learn More</a>
						</div><!--/container-->
					</div><!--/text-->
				</div><!--/slide-->
				<?php
				}
			?>
			</div><!--/slider_container-->
		</section><!--/banner-->
<?php
	include("includes/footer.php");
?>