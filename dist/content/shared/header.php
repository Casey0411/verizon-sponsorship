<?php	
/**
 * Global Header
 */
?>
<?php //include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Thanks to our partnership with Verizon, Title 1 high schools can now receive free New York Times digital subscriptions while connected to their school networks.">
		<meta content="NYT School Access" property="og:title">
		<meta content="nytimes.com/schoolaccess" property="og:site_name">
		<meta content="https://nytimesgroupsubscriptions.com/schoolaccess/assets/img/NYT-School-Access.jpg" property="og:image">
		<meta content="website" property="og:type">
		<meta content="nytimes.com/schoolaccess" property="og:url">
		<meta content="Thanks to our partnership with Verizon, Title 1 high schools can now receive free New York Times digital subscriptions while connected to their school networks." property="og:description">
		<meta name="google-site-verification" content="lIBSA1XE-e8EgsgJxJj7bQnXo7_y-8PLVzJ1hoslhlU" />

		<title>NYT School Access</title>

		<link rel="shortcut icon" href="https://static01.nyt.com/favicon.ico" />

		<link rel="stylesheet" href="https://a1.nyt.com/fonts/css/fonts.css" type="text/css"/>
		<link rel="stylesheet" href="proxy-assets/foundation.min.css" />
		<link rel="stylesheet" href="proxy-assets/app.css" />
		<link href="assets/css/style.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="https://cdn.optimizely.com/public/3013110282/s/gm.js"></script>
		
		<?php //include 'shared/cookie-consent.php' ?>
		<?php // Tracking ?>
		<?php //include 'tracking.php' ?>

		<script>
            /* Google Analytics */
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-104393356-1', 'auto');
            ga('send', 'pageview');
        </script>

		<script type="text/javascript">
		piAId = '147041';
		piCId = '19933';
		piHostname = 'pi.pardot.com';

		(function() {
		function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
		}
		if(window.attachEvent) { window.attachEvent('onload', async_load); }
		else { window.addEventListener('load', async_load, false); }
		})();
		</script>

		<script>
			window.location.href = "http://www.nytimes.com/highschoolaccess";	
		</script>

	</head>
	<body class="<?php //bodyClass($pageTitle); ?>" style="background: #ccc; display: none;">
		<?php include 'content/components/top-nav.php' ?>

