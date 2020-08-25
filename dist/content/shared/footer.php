<?php
/**
 * Global Footer
 */
?>

<script>
	$(document).ready(function(){

		$("footer.footer .col h3 button.footer_toggle").on("click", function(){
			var theseLinks = $(this).parents(".col").find(".footer_links");
			var thisBtn =$(this).parents("h3");
			var thisIcon = $(this).parents("h3").find("i");
			var thisSvg = $(this).find("i svg g");

			if(thisBtn.hasClass("active")){
				thisBtn.removeClass("active");
				theseLinks.slideUp();
				thisIcon.transition({rotate:"0"});
			}else{
				thisBtn.addClass("active");
				theseLinks.slideDown();
				thisIcon.transition({rotate:"45"});
			}

		});//END of footer links


	});
</script>



<!-- Site footer -->
<footer class="footer">
	<svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<symbol viewbox="0 0 30 30" preserveaspectratio="xMinYMin meet" id="icon-plus-toggle-svg">
			<title>plus-icon</title><g id="Working" class="cls-1 footer_plus"><g id="PA-Why-Desktop"><g id="_01-Journ.-Videos" data-name="01-Journ.-Videos"><g id="Instagrams"><g id="Caption-01"><g id="Blue-Plus"><g id="Combined-Shape"><g class="cls-2"><path id="path-1" d="M22,20V14H20v6H14v2h6v6h2V22h6V20ZM21,36A15,15,0,1,1,36,21,15,15,0,0,1,21,36Z" transform="translate(-6 -6)"></path></g><path id="path-1-2" data-name="path-1" class="cls-3" d="M22,20V14H20v6H14v2h6v6h2V22h6V20ZM21,36A15,15,0,1,1,36,21,15,15,0,0,1,21,36Z" transform="translate(-6 -6)"></path></g></g></g></g></g></g></g>
		</symbol>
	</svg>


	<div class="container">

		<div class="col">
			<a href="https://www.nytimes.com/" class="logo">
				<img src="https://www.nytimes.com/subscriptions/Multiproduct/assets_pa2017/images/logo_nyt_white.svg" width="200">
			</a>
			<p>&copy; <span class="current-year">2019</span></p>
		</div><!-- /. of col -->

		<div class="col">
			<h3>
				About <i><svg height="22px" width="22px"><use xlink:href="#icon-plus-toggle-svg"></use></svg></i>
				<button class="footer_toggle"></button>
			</h3>
			<div class="footer_links">
				<a href="http://www.nytco.com/" target="_blank">The New York Times Company </a> <br>
				<a href="https://www.nytimes.com/content/help/rights/privacy/policy/privacy-policy.html" target="_blank">Privacy Policy</a> <br>
				<a href="https://www.nytimes.com/content/help/rights/sale/terms-of-sale.html" target="_blank">Terms of Sale</a>
			</div><!-- END of footer_links -->
		</div><!-- /. of col -->

		<div class="col">
			<h3>
				Help <i><svg height="22px" width="22px"><use xlink:href="#icon-plus-toggle-svg"></use></svg></i>
				<button class="footer_toggle"></button>
			</h3>
			<div class="footer_links">
				<a href="https://www.nytimes.com/content/help/subscriptions/purchases/subscriptions-and-purchases.html" target="_blank">Frequently Asked Questions</a> <br>
				<a href="http://www.nytimes.com/help/index.html?redir=myacc" target="_blank">Contact Us</a> <br>
				<a href="http://www.nytimes.com/help/index.html?redir=myacc" target="_blank">Feedback</a>
			</div><!-- /. of footer_links -->
		</div><!-- /. of col -->

		<div class="col">
			<h3>
				Ways to Subscribe <i><svg height="22px" width="22px"><use xlink:href="#icon-plus-toggle-svg"></use></svg></i>
				<button class="footer_toggle"></button>
			</h3>
			<div class="footer_links">
				<a href="https://www.nytimes.com/subscription/multiproduct/lp8HYKU.html?campaignId=6JUHR" class="link_newreader" target="_blank">Digital + Home Delivery</a> <br>
				<a href="https://www.nytimes.com/subscriptions/edu/lp8LQFK.html?campaignId=6RR8R" class="link_education" target="_blank">Education Rates</a> <br>
				<a href="http://nytimesgroupsubscriptions.com/?Pardot_Campaign_Code_Form_Input=6XUJR" class="link_corporate" target="_blank">Group Subscriptions</a> <br>
				<a href="https://www.nytimes.com/subscription/games/lp897H9.html?campaignId=6RRWR" class="link_crosswords" target="_blank">NYTimes Crossword</a> <br>
				<a href="https://www.nytimes.com/subscription/multiproduct/lp8R34X.html?campaignId=3FQ4Y" class="link_gift" target="_blank">Gift Subscriptions</a>
			</div><!-- /. of footer_links -->
		</div><!-- /. of col -->

		<p class="mobile_copyright">Copyright ©2017</p>

	</div><!-- /. of container -->
</footer>


</body></html>
