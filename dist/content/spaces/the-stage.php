<?php
/**
 * Space: The Stage
*/
?>
<section id="thestage">
	<div class="space panel panel-default" >
		<div class="space__header panel-heading" role="tab" id="headingOne">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4 class="panel-title">The Stage</h4>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="right_copy">
							The Stage is a 378-seat auditorium featuring a 60-foot-wide stage with a rear, 30' high, glass curtain wall looking into The Times Building’s atrium. This state-of-the-art, intimate and unforgettable venue is perfect for a wide variety of events, including conferences, galas, meetings and performances.
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-2">
						<a class="btn-toggle btn-toggle-panel" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<span class="learn-more">Click to Expand</span>
							<span class="learn-less">
								<svg viewPort="0 0 12 12" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
									<line x1="1" y1="11" x2="11" y2="1" stroke="#ff0000" stroke-width="2"/>
									<line x1="1" y1="1" x2="11" y2="11" stroke="#ff0000" stroke-width="2"/>
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

		<div class="space__body panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
			<hr/>

			<!-- Tab Navigation -->
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<!-- /.col -->
					<div class="col-md-7">
						<div class="navpill-holder">
							<ul class="nav nav-pills nav-space-tab-menu">
								<li class="active"><a data-toggle="pill" href="#stage1" class="nav__link--stage">Images</a></li>
								<li><a data-toggle="pill" href="#stage2" class="nav__link--stage">General Info</a></li>
								<li><a data-toggle="pill" href="#stage3" class="nav__link--stage">Technical Specs</a></li>
								<li><a data-toggle="pill" href="#stage4" class="nav__link--stage">360 Venue Tour</a></li>
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
				<div id="stage1" class="tab-pane tab-pane--gallery fade in active">
					<div class="container"></div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="stage2" class="tab-pane fade">
					<div class="container">
						<?php include("content/spaces/stage/general.php"); ?>
					</div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="stage3" class="tab-pane fade">
					<div class="container">
						<?php include("content/spaces/stage/specs.php"); ?>
					</div>
					<!-- /.container -->
				</div>
				<!-- /.tab-pane -->
				<div id="stage4" class="tab-pane fade">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="video-container" id="video-container--stage">
									<iframe width="1044" height="587" src="https://www.youtube.com/embed/nlg6Utk_cZ8?modestbranding=1&iv_load_policy=3&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
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
