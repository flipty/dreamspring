<?php include('includes/head-offline.html');?>

<body>

<!--
  templateType: page
  isAvailableForNewContent: true
  label: Home 2024
  screenshotPath: ../static/img/preview/index.jpg
-->
{% extends "./layout/base.html" %}

{% block body %}

<main id="main" class="home-2024">

    <section class="home-hero-wave" style="background-image:url('{% image_src "hero_image" label="Hero Image"  no_wrapper=True %}');">
        <div class="inner">
            <div class="home-hero-content container">
                    <div class="content-inner">
                        <img src="https://go.dreamspring.org/hubfs/logo-anniversary.png" alt="DreamSpring Celebrates 30 Years">
                        <h1 class="mb-4">{% text "hero_headline" label="Hero Headline", value="Funding business dreams,<br>revitalizing communities", no_wrapper=True %}</h1>                        
                        {% module "module_button_hero" path="/carbon/module/button", label="Hero Button" no_wrapper=True %}
                    </div>
            </div>
            <div class="wave">
                <img src="https://go.dreamspring.org/hubfs/hero-wave.png" alt="a transparent blue wave">
            </div>            
        </div>
    </section>

    <section class="home-subhero mt-8">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 item text-center">
                    <div class="inner">
                        {% image "subhero_1_image" label="Subhero 1 Image" no_wrapper=True %}
                        <span>{% text "subhero_1" label="Subhero 1 Headline", value="What type of loans does DreamSpring provide?", no_wrapper=True %}</span>
                        <a href="{% text "subhero_1_link" label="Subhero 1 Link URL", value="#", no_wrapper=True %}" class="hasarrow" target="_blank">{% text "subhero_1_link_text" label="Subhero 1 Link Text", value="FIND YOURS", no_wrapper=True %}</a>
                    </div>
                </div>
                <div class="col-sm-4 item text-center middle-item">
                    <div class="inner">
                        {% image "subhero_2_image" label="Subhero 2 Image" no_wrapper=True %}
                        <span>{% text "subhero_2" label="Subhero 2 Headline", value="DreamSpring Impact", no_wrapper=True %}</span>
                        <a href="{% text "subhero_2_link" label="Subhero 2 Link URL", value="#", no_wrapper=True %}" class="hasarrow" target="_blank">{% text "subhero_2_link_text" label="Subhero 2 Link Text", value="READ CLIENT STORIES", no_wrapper=True %}</a>
                    </div>
                </div>
                <div class="col-sm-4 item text-center">
                    <div class="inner">
                        {% image "subhero_3_image" label="Subhero 3 Image" no_wrapper=True %}
                        <span>{% text "subhero_3" label="Subhero 3 Headline", value="Supporting Entrepeneurial Dreams", no_wrapper=True %}</span>
                        <a href="{% text "subhero_3_link" label="Subhero 3 Link URL", value="#", no_wrapper=True %}" class="hasarrow" target="_blank">{% text "subhero_3_link_text" label="Subhero 3 Link Text", value="ABOUT DREAMSPRING", no_wrapper=True %}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-products wave-blue-dark text-center">
        <div class="container">
            <div class="content">
                <h2 class="mt-3">{% text "products_headline" label="Products Headline", value="DreamSpring Business Loans", no_wrapper=True %}</h2>
                {% rich_text "products_text_1" label="Products Intro", value="" no_wrapper=True %}
            </div>

          {% module "home_product_tabs_hubdb" path="/carbon/module/product_tabs", label="product_tabs" no_wrapper=True %}
            
            <div class="row text-center">
                <div class="col-sm-12 mb-4 buttonrow">
                  <div class="mt-8 mb-4">
                    {% rich_text "products_post_content" label="Products Post-Headline", value="Ready to get started?", no_wrapper=True %}
                  </div>
                    {% module "module_button_products_mobile" path="/carbon/module/button", label="Products Button 1 Mobile" no_wrapper=True %}
                    {% module "module_button_products1" path="/carbon/module/button", label="Products Button 1" no_wrapper=True %}&nbsp;&nbsp;
                    {% module "module_button_products2" path="/carbon/module/button", label="Products Button 2" no_wrapper=True %}
                </div>
            </div>

        </div>
    </section>

      <section class="home-news wave-blue-light text-center">
        <div class="container">
            <div class="content">
                <h2 class="mt-3">{% text "news_headline" label="News Headline", value="DreamSpring News", no_wrapper=True %}<span class="leaf"></span></h2>
            </div>
            <div class="row">
         
              {% set blogPosts = blog_recent_posts(32808145074, 1) %}
              {% set newsPosts = blog_recent_posts(54502250497, 1) %}
         
              {% for post in blogPosts %}
                <div class="col-md-6 item pb-8">
                    <div class="inner">
                      <div class="image">
                        <img src="{{ post.featured_image }}" alt="{{ post.name }}">
                      </div>
                      <div class="content">
                        <h3><a href="{{ post.absolute_url }}">{{ post.name }}</a></h3>
                      </div>
                      <a href="{{ post.absolute_url }}" class="hasarrow" target="_blank">READ MORE</a>
                    </div>
                </div>
              {% endfor %}

              {% for post in newsPosts %}
                <div class="col-md-6 item pb-8">
                    <div class="inner">
                      <div class="image">
                        <img src="{{ post.featured_image }}" alt="{{ post.name }}">
                      </div>
                      <div class="content">
                        <h3><a href="{{ post.absolute_url }}">{{ post.name }}</a></h3>
                      </div>
                      <a href="{{ post.absolute_url }}" class="hasarrow" target="_blank">READ MORE</a>
                    </div>
                </div>
              {% endfor %}

            </div>

            
        </div>
    </section>

    <section class="home-clients">
        <div class="container">
        <div class="row">
            <div class="col-sm-6 image mb-8">
              {% image "client_image" label="Client Image" no_wrapper=True %}
            </div>
            <div class="col-sm-6 content">
                <h2>{% text "client_headline" label="Client Headline", value="CLIENT STORIES", no_wrapper=True %}<span class="leaf"></span></h2>
                <h3>{% text "client_sub_headline" label="Client Sub-Headline", value="DreamSpring Makes an Impact", no_wrapper=True %}</h3>
                <div class="content">
                  {% rich_text "client_intro" label="Client Intro", value="" no_wrapper=True %}
                </div>
                {% module "module_button_clients" path="/carbon/module/button", label="Clients Button" no_wrapper=True %}
            </div>
        </div>
        </div>
    </section>

    <section class="home-stats">
        <div class="container">
        
            <div class="row">
                <div class="col-md-6 title">
                    <h2>{% text "stats_headline" label="Stats Headline", value="28 Years<br>of Growing<br>Together", no_wrapper=True %}</h2>
                    <div class="title-content mt-4">
                    {% rich_text "stats_content" label="Stats Content", value="DreamSpring is an award-winning nonprofit organization that increases access to credit, makes loans, and provides a community of support to help entrepreneurs realize their dreams." no_wrapper=True %}  
                    </div>
                    
                </div>
                <div class="col-md-6">
                  {% module "home_feature_stats" path="/carbon/module/feature_stats_home-hubdb", label="Stat Counter" no_wrapper=True %}
                </div>
            </div>
            
        </div>
    </section>

    <section class="home-support wave-blue-light text-center">
        <div class="container">
            <h2 class="mt-4">{% text "support_headline" label="Support Headline", value="Supporting Entrepeneurial Dreams", no_wrapper=True %}<span class="leaf"></span></h2>
            <div class="row">
                <div class="col-md-6 item">
                    <div class="inner">
                      {% image "support_1_image" label="Support 1 Image" no_wrapper=True %}
                      <div class="content">
                        {% rich_text "support_1_content" label="Support Section 1", value="Annual Report", no_wrapper=True %}
                      </div>
                      <a href="{% text "support_1_link" label="Support 1 Link", value="", no_wrapper=True %}" class="hasarrow" target="_blank">{% text "support_1_link_text" label="Support 1 Link Text", value="CHECK IT OUT", no_wrapper=True %}</a>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="inner">
                      {% image "support_2_image" label="Support 2 Image" no_wrapper=True %}
                      <div class="content">
                        {% rich_text "support_2_content" label="Support Section 2", value="Our Mission and Values", no_wrapper=True %}
                      </div>
                      <a href="{% text "support_2_link" label="Support 2 Link", value="", no_wrapper=True %}" class="hasarrow" target="_blank">{% text "support_2_link_text" label="Support 2 Link Text", value="CHECK IT OUT", no_wrapper=True %}</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="outro mt-8 mb-4">
                      {% rich_text "support_outro" label="Support Outro", value="" no_wrapper=True %}
                    </div>
                    {% module "module_button_support" path="/carbon/module/button", label="Support Button" no_wrapper=True %}
                </div>
            </div>
        </div>
    </section>

    <section class="home-partners mb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content">
                  <h2>{% text "partners_headline" label="Partners Headline", value="Partnership with DreamSpring Empowers Business", no_wrapper=True %}</h2>
                  {% rich_text "partners_content" label="Partners Content", value="", no_wrapper=True %}
                  {% module "module_button_partners" path="/carbon/module/button", label="Partners Button" no_wrapper=True %}
                </div>
                <div class="col-md-6 logos">
                    <h3>{% text "featured_partner_headline" label="Featured Partner Headline", value="FEATURED PARTNERS", no_wrapper=True %}<span class="leaf"></span></h3>
                    <div class="partners-list">
                      {% module "home_partners_list" path="/carbon/module/Partner Grid Home", label="Partner Grid Home" no_wrapper=True %}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-hero-wave testimonial" style="background-image:url('{% image_src "testimonial_hero_image" label="Testimonial Hero Image"  no_wrapper=True %}');">
        <div class="inner">
            <div class="home-hero-content container">
                    <div class="content-inner">
                      <img src="https://go.dreamspring.org/hubfs/testimonial-quote.svg" alt="quotation mark" style="width: 75px; margin: 0 0 20px 0;">
                      {% rich_text "testimonial_content" label="Testimonial Content", value="", no_wrapper=True %}
                      {% module "module_button_testimonial" path="/carbon/module/button", label="Testimonial Button" no_wrapper=True %}
                    </div>
            </div>
            <div class="wave">
                <img src="https://go.dreamspring.org/hubfs/hero-wave.png" alt="a transparent blue wave">
            </div>            
        </div>
    </section>

    <section class="howtoapply mb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>{% text "howto_headline" label="How To Apply Headline", value="How Do I apply?", no_wrapper=True %}<span class="leaf"></span></h2>
                    <div class="inner-content mt-4 mb-8">
                    {% rich_text "howto_content" label="How To Apply Content", value="", no_wrapper=True %}  
                    </div>
                    <ul class="step-headers">
                        <li id="step-1-header" style="background-image: url('https://go.dreamspring.org/hubfs/icon-store.png');">STEP 1</li>
                        <li id="step-2-header" style="background-image: url('https://go.dreamspring.org/hubfs/step-2-icon.png');">STEP 2</li>
                        <li id="step-3-header" style="background-image: url('https://go.dreamspring.org/hubfs/step-3-icon.png');">STEP 3</li>
                    </ul>
                    <ul class="step-content mb-6">
                        <li id="step-1-content"><h4>STEP 1</h4><p>{% text "howto_step1" label="How To Step 1", value="Enter your information and business details", no_wrapper=True %}</p></li>
                        <li id="step-2-content"><h4>STEP 2</h4><p>{% text "howto_step2" label="How To Step 2", value="Share financial details, collateral and references", no_wrapper=True %}</p></li>
                        <li id="step-3-content"><h4>STEP 3</h4><p>{% text "howto_step3" label="How To Step 3", value="Get your loan pre-approval or approval notice", no_wrapper=True %}</p></li>
                    </ul>

                    {% module "module_button_howto" path="/carbon/module/button", label="How To Apply Button" no_wrapper=True %}

                </div>
            </div>
        </div>
    </section>

{% module "module_16975688670097" path="/carbon/module/home_products_table", label="Product Comparison Table" %}
{% module "module_169766423977723" path="/carbon/module/Home Products Table Mobile", label="Product Comparison Table (Mobile)" %}
  
</main>

{% endblock body %}

</body>

<?php include('includes/footer.html');?>