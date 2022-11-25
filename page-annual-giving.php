<?php include('includes/head-offline.html');?>

<body>

<main id="main" class="annual-giving">

  <section class="annual-hero">
	<div class="image">
		<img src="https://www.placecage.com/c/1000/425" alt="Nic Cage">
	</div>
	<div class="content">
		<div class="container">
			<h1>Vitalize communites & transform lives through the power of entrepreneurship!</h1>
		</div>
	</div>
  </section>

  <section class="annual-testimonial">
    <div class="container">
      <div class="row">
		<div class="col-md-12 text-center">
			<h2 class="mb-8">Advancing Dreams</h2>
		</div>
		<div class="col-md-6 video">
			{% video_player "embed_player" %}
		</div>
		<div class="col-md-6 content">
			<img src="https://go.dreamspring.org/hubfs/testimonial-quote.svg" class="quote" alt="stylized quotation mark">
			{% rich_text "testimonial__content" label="Testimonial X Content", value="Content goes here..." %}
		</div>
	  </div>
    </div>
  </section>

	<a name="donate"></a>
	<section class="annual-donate">
		<div class="container">
 			<div class="row">
				<div class="col-md-6 text-left">
					<h2 class="mb-4">{% text "donate_headline" label="Donate Headline", value="When you support DreamSpring, you:" %}</h2>
          			{% rich_text "donate_content" label="Donate Content", value="Content goes here..." %}
        		</div>
				<div class="col-md-6">		
					<iframe allowpaymentrequest="" frameborder="0" name="donorbox" scrolling="no" seamless="seamless" src="//donorbox.org/embed/dreamspring" height="680" width="400"></iframe>
				</div>
			</div>
		</div>
	</section>

	<section class="wave-blue">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-md-6 image">
						{% image "blurb__image" label="Blurb X Image" no_wrapper=True %}
					</div>
					<div class="col-md-6 content">
						<h2>Make a Difference <span class="leaf"></span></h2>
						{% rich_text "blurb__content" label="Blurb X Content", value="ngage with us to see our impact in action and to learn about new ways to get involved." %}
						{% module "blurb__button" path="/carbon/module/button", label="Blurb X Button" %}
					</div>
				</div>
			</div>
		</div>
	</section>
  
	<section class="outro">
		<div class="container">
			<div class="row">
				<div class="col-md-6 content">
					<div class="inner">
						<h2>Help Entrepeuruers Achieve Their Dreams</h2>
						<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit eveniet officia odio perspiciatis molestiae saepe facilis, nobis sint iste dolorum in, cupiditate ipsam exercitationem tempora facere sit corrupti deserunt reiciendis.
						</p>
					</div>
				</div>
				<div class="col-md-6 image">
				OUTRO IMAGE
				</div>
				<div class="col-md-12 button text-center">
					{% module "outro_button" path="/carbon/module/button", label="Outro Button" %}
				</div>
			</div>
		</div>
	</section>

</main>

</body>

<?php include('includes/footer.html');?>