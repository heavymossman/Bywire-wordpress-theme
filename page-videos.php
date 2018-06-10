<?php /*

Template Name: Videos layout


@package ByWire_News

*/

get_header(); ?>


<!-- Depencies

	http://fancyapps.com/fancybox/3/

	https://responsivevideogallery.com/

	https://github.com/angelajholden/responsivevideogallery
	http://sachinchoolur.github.io/lightGallery/static/img/play-button.png
-->

<section>
	<div class="container my-5">
		<div class="row text-center megaMargin mobileMarginTop mb-3">
			<div class="col-md-12">
				<h1>Latest Videos</h1>
				<p><small>Sort by: <a href="#">latest</a> | <a href="#">name</a> | <a href="#">a-z</a> | <a href="#">z-a</a> | <a href="#">oldest</a></small></p>
				<hr />
			</div>
		</div>

		<div class="row text-center mt-5">

			<div class="col-md-4">
				<article class="video">
					 <figure>
						 <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/CQVL7mA1wJA">
						 <img class="videoThumb img-fluid" src="https://img.youtube.com/vi/CQVL7mA1wJA/0.jpg"></a>
					 </figure>
					 <div class="p-2">
						 <h2 class="videoTitle">Jaynemesis</h2>
						 <hr />
						 <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></p>
					 </div>
				 </article>

			</div>

			<div class="col-md-4">
				<article class="video">
					 <figure>
						 <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/Ew_X6eC-ha0">
						 <img class="videoThumb img-fluid" src="https://img.youtube.com/vi/Ew_X6eC-ha0/0.jpg"></a>
					 </figure>
					 <div class="p-2">
						 <h2 class="videoTitle">NovaraMedia</h2>
						 <hr />
						 <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></p>
					 </div>
				 </article>

			</div>


			<div class="col-md-4">
				<article class="video">
					 <figure>
						 <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/ALXcfCw5n8k">
						 <img class="videoThumb img-fluid" src="https://img.youtube.com/vi/ALXcfCw5n8k/0.jpg"></a>
					 </figure>
					 <div class="p-2">
						 <h2 class="videoTitle">News Club Live!</h2>
						 <hr />
						 <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></p>
					 </div>
				 </article>

			</div>


		</div>


  </div>
</section>

<?php get_footer(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script>
  $(document).ready(function() {
    $('.fancybox').fancybox({
      padding   : 0,
      maxWidth  : '100%',
      maxHeight : '100%',
      width   : 560,
      height    : 315,
      autoSize  : true,
      closeClick  : true,
      openEffect  : 'elastic',
      closeEffect : 'elastic'
    });
  });
</script>
