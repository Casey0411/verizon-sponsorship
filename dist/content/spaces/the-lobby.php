<?php
/**
 * Space: The Lobby (formerly "The Gallery")
*/
?>
<section id="thegallery">
	<div class="space panel panel-default">
		<div class="space__header panel-heading" role="tab" id="headingFour">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4 class="panel-title">The Lobby</h4>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="right_copy">
							TheTimesCenter lobbies outside The Stage and The Hall provide sweeping, multilevel, open floor plan spaces. These are ideal settings for showcasing your event’s registration needs, food and beverage stations, product and sponsor exhibits and guest networking.
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-2">
						<a class="btn-toggle btn-toggle-panel" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<span class="learn-more">Click to Expand</span>
							<span class="learn-less">
								<svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
									<line x1="1" y1="11" x2="11" y2="1" stroke="#f58220" stroke-width="2"/>
									<line x1="1" y1="1" x2="11" y2="11" stroke="#f58220" stroke-width="2"/>
								</svg>
							</span>
						</a>
					</div>
					<!-- /.col -->
				</div>

			</div>
			<!-- /.container -->
		</div>
		<!-- /.panel-heading -->

		<div class="space__body panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
			<hr/>

			<!-- Tab Navigation -->
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<!-- /.col -->
					<div class="col-md-7">
						<div class="navpill-holder">
							<ul class="nav nav-pills nav-space-tab-menu">
								<li class="active"><a data-toggle="pill" href="#lobby1" class="nav__link--gallery">Images</a></li>
								<li><a data-toggle="pill" href="#lobby2" class="nav__link--gallery">360 Venue Tour</a></li>
							</ul>
						</div>
						<!-- /.navpill-holder -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<!-- Tabs -->
			<div class="tab-content">
				<div id="lobby1" class="tab-pane tab-pane--gallery fade in active">
					<div class="container">
						<?php include("content/spaces/lobby/carousel.php"); ?>
					</div>
				</div>
				<!-- /.tab-pane -->
				<div id="lobby2" class="tab-pane fade">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="video-container" id="video-container--lobby">
									<iframe width="1044" height="587" src="https://www.youtube.com/embed/BH5KrFC350s?modestbranding=1&iv_load_policy=3&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
		</div>
		<!-- /.panel-collapse -->
	</div>
	<!-- /.space.panel.panel-default -->
</section>
