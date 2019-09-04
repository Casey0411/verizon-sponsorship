<?php
/**
 * Space: The Screening Room
*/
?>
<section id="thescreeningroom">
	<div class="space panel panel-default">
		<div class="space__header panel-heading" role="tab" id="headingThree">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4 class="panel-title">The Screening<br/> Room</h4>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="right_copy">
							The Stage can also be used as a state-of-the-art, theater-quality screening room featuring an alternate, in-house technical package that includes a 22k digital projector, digital cinema server, surround sound package and a 14'x33', scalable, perforated screen.
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-2">
						<a class="btn-toggle btn-toggle-panel" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<span class="learn-more">Click to Expand</span>
							<span class="learn-less">
								<svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
									<line x1="1" y1="11" x2="11" y2="1" stroke="#ffa200" stroke-width="2"/>
									<line x1="1" y1="1" x2="11" y2="11" stroke="#ffa200" stroke-width="2"/>
								</svg>
							</span>
						</a>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.panel-heading -->
		<div class="space__body panel-collapse collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
			<hr/>

			<!-- Tab Navigation -->
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<!-- /.col -->
					<div class="col-md-7">
						<div class="navpill-holder">
							<ul class="nav nav-pills nav-space-tab-menu">
								<li class="active"><a data-toggle="pill" href="#screening1" class="nav__link--screening-room">Images</a></li>
								<li><a data-toggle="pill" href="#screening2" class="nav__link--screening-room">General Info</a></li>
								<li><a data-toggle="pill" href="#screening3" class="nav__link--screening-room">Technical Specs</a></li>
								<li><a data-toggle="pill" href="#screening4" class="nav__link--screening-room">360 Venue Tour</a></li>
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
				<div id="screening1" class="tab-pane tab-pane--gallery fade in active">
					<div class="container"></div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="screening2" class="tab-pane fade">
					<div class="container">
						<?php include("content/spaces/screening/general.php"); ?>
					</div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="screening3" class="tab-pane fade">
					<div class="container">
						<?php include("content/spaces/screening/specs.php"); ?>
					</div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="screening4" class="tab-pane fade">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="video-container" id="video-container--screening-room">
									<iframe width="1044" height="587" src="https://www.youtube.com/embed/wtpraG7Yb7U?modestbranding=1&iv_load_policy=3&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
		</div>
		<!-- /.panel-collapse -->
	</div>
	<!-- /.space.panel.panel-default -->
</section>
<!-- /#thescreeningroom -->
