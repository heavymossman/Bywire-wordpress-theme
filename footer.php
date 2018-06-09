<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ByWire_News
 */

?>

	</div><!-- #content -->

<!--	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bywire-news' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bywire-news' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bywire-news' ), 'bywire-news', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	<!--</footer><!-- #colophon -->
<!--</div><!-- #page



</body>
</html>-->

<section class="megaMargin">
  <div class="container-fluid footerbk pa-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5 pa-5">
          <h3 class="py-3">ByWire.news</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          <br />
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Enter your email to get updates" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-danger" type="button"><i class="far fa-envelope-open"></i></button>
            </div>
          </div>
        </div>
        <div class="col"></div>
        <div class="col-md-3 pa-5 text-right">
          <h4 class="py-3">Menu Title</h4>
          <ul class="nav flex-column ">
            <li class="nav-item">
              <a class="nav-link white" href="page.php">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="page.php">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="page.php">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="page.php">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="page.php">Link</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 pa-5 text-right">
          <h4 class="py-3">Menu Title</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link white" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="#">Link</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 text-left">
          <p><small>Copyright 2018 ByWire.news 101 Finsbury Pavement, EC2A 1RS, London</small></p>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
          <p><small><a class="white" href="#">Privacy</a> | <a class="white" href="#">Cookies</a></small></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
