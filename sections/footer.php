<!-- INCLUDE COOKIES-MODAL.PHP start -->
    <?php include 'sections/cookies-modal.php';?>
<!-- INCLUDE COOKIES-MODAL.PHP end -->

<!-- INCLUDE PRIVACY-POLICY.PHP start -->
  <?php include 'sections/privacy-policy.php';?>
<!-- INCLUDE PRIVACY-POLICY.PHP end -->

<!-- INCLUDE TERMS-OF-SERVICE.PHP start -->
  <?php include 'sections/terms-of-service.php';?>
<!-- INCLUDE TERMS-OF-SERVICE.PHP end -->

<footer>

  <div id="social-icons">
    <ul>
        <li><a href="http://polyforum.org/facebook" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="http://polyforum.org/twitter" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </div>

  <div id="the-poly-group">
    <a href="http://thepolygroup.co" target="_blank">
      <img src="imgs/the-poly-group.svg" height="35px" width="auto" alt="The Poly Group">
    </a>
  </div>

  <div style="clear:both"></div>

  <div id="legal">
    <a onclick="document.getElementById('privacy-policy').className='modal-wrapper d-block';document.documentElement.className='overflow-hidden';" >Privacy Policy</a> <span style="color:#0002;margin:0 5px;">|</span> <a onclick="document.getElementById('terms-of-service').className='modal-wrapper d-block';document.documentElement.className='overflow-hidden';">Terms of Service</a>
  </div>

</footer>

<!-- Cookies GDPR Toggle start -->
<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<script type = "text/javascript">
$( document ).ready(function() {
	if(Cookies.get('polyfen_GDPR') === undefined) {
		$('#cookies-modal').removeClass("d-none");
	} else {
		$('#cookies-modal').addClass("d-none");
	}

	$(".cookies-button").click(function() {
		Cookies.set('polyfen_GDPR', 'accept');
	});
});
</script>
<!-- Cookies GDPR Toggle end -->
