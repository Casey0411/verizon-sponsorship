<?php
/**
 * General Info Page
 */
$pageTitle = 'General Info';
?>
<?php require_once("content/shared/header.php"); ?>

<div id="general-info">
	<?php
		include("content/general/booking.php");
		include("content/general/technical.php");
		include("content/general/catering.php");
		include("content/general/testimonials.php");
		include("content/general/faq.php");
	?>
</div>
<!-- /#general-info -->

<?php require_once("content/shared/footer.php");
