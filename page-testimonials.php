<?php include('includes/head-offline.html');?>

<body>

<main id="main" class="product-detail">
  
  <section class="intro">
    <div class="container">
      <h1 class="h4 text-primary">TESTIMONIALS</h1>
      <h2>See what real customers think about DreamSpring</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora architecto, numquam soluta tempore nulla illo commodi fuga quis odio ad cum rerum natus esse eveniet nam in iure officia.
      </p>
    </div>
  </section>

  <section class="testimonial-listing">
    <div class="container">
      <div class="row">
    
        <div class="col-sm-6 col-lg-6 col-xs-12 mb-3 mb-sm-8">
          <article class="card h-100" aria-label="{{ page_meta.name }}" data-tags="mn nm product 1">
            <div class="card-body">
              <h3><a class="text-inherit" href="{{ content.absolute_url }}">title</a></h3>
              <p>testimonial content</p>
            </div>
          </article>
        </div>

        <div class="col-sm-6 col-lg-6 col-xs-12 mb-3 mb-sm-8">
          <article class="card h-100" aria-label="{{ page_meta.name }}" data-tags="mn">
            <div class="card-body">
              <h3><a class="text-inherit" href="{{ content.absolute_url }}">title</a></h3>
              <p>testimonial content</p>
            </div>
          </article>
        </div>

        <div class="col-sm-6 col-lg-6 col-xs-12 mb-3 mb-sm-8">
          <article class="card h-100" aria-label="{{ page_meta.name }}" data-tags="product 2">
            <div class="card-body">
              <h3><a class="text-inherit" href="{{ content.absolute_url }}">title</a></h3>
              <p>testimonial content</p>
            </div>
          </article>
        </div>

      </div>
    </div>

  </section>

</main>

</body>

<?php include('includes/footer.html');?>