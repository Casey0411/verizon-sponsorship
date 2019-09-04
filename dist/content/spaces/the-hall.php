<?php
/**
 * Space: The Hall
*/
?>
<section id="thehall">
	<div class="space panel panel-default">
		<div class="space__header panel-heading" role="tab" id="headingTwo">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4 class="panel-title">The Hall</h4>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="right_copy">
							The Hall is a 5,000-square foot, unencumbered event space with a clean, modern aesthetic and the audio/video conveniences to help bring any event to life.
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-2">
						<a class="btn-toggle btn-toggle-panel" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<span class="learn-more">Click to Expand</span>
							<span class="learn-less">
								<svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
									<line x1="1" y1="11" x2="11" y2="1" stroke="#ee4d00" stroke-width="2"/>
									<line x1="1" y1="1" x2="11" y2="11" stroke="#ee4d00" stroke-width="2"/>
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
		<div class="space__body panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
			<hr/>

			<!-- Tab Navigation -->
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<!-- /.col -->
					<div class="col-md-7">
						<div class="navpill-holder">
							<ul class="nav nav-pills nav-space-tab-menu">
								<li class="active"><a data-toggle="pill" href="#hall1" class="nav__link--hall">Images</a></li>
								<li><a data-toggle="pill" href="#hall2" class="nav__link--hall">General Info</a></li>
								<li><a data-toggle="pill" href="#hall3" class="nav__link--hall">Technical Specs</a></li>
								<li><a data-toggle="pill" href="#hall4" class="nav__link--hall">360 Venue Tour</a></li>
							</ul>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<!-- Tabs -->
			<div class="tab-content">
				<div id="hall1" class="tab-pane tab-pane--gallery fade in active">
					<div class="container"></div>
				</div>
				<div id="hall2" class="tab-pane fade">
					<div class="container">
						<?php include("content/spaces/hall/general.php"); ?>
					</div>
				</div>
				<div id="hall3" class="tab-pane fade">
					<div class="container">
					<?php include("content/spaces/hall/specs.php"); ?>
					</div>
				</div>
				<div id="hall4" class="tab-pane fade">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="video-container" id="video-container--hall">
									<iframe width="1044" height="587" src="https://www.youtube.com/embed/jT0QwMDjkXE?modestbranding=1&iv_load_policy=3&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.tab-content -->
		</div>
		<!-- /.panel-collapse -->
	</div>
	<!-- /.space.panel.panel-default -->
</section>
