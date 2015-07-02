<?php /* Template Name: Press Page */ get_header(); ?>

<!-- main content-->
<div class="main-content" style="padding-bottom: 20px;">
  <!-- main title -->
  <section class="main-title text-center clearfix" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/press/headerImage.jpg);">
    <div class="col-sm-8 col-sm-offset-2">
      <h1>Press</h1>
      <p class="h3">News, company info and media resources</p>
    </div>
  </section>

  <!-- press -->
  <section class="press">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row">
            <div class="press__content col-md-8 col-md-offset-1 col-md-push-3">
              <h3>Disruptive industrial automation products</h3>
              <p>
                Grey Orange is a venture-backed technology company that designs, manufactures and deploys advanced robotics systems. Designers and engineers at heart, we direct our energy at building deep moats around industrial automation products in billion-dollar market segments. We want to accelerate the flow of goods from factory to consumer.
              </p>
              <h3>
                Backstory
              </h3>
              <p>
                The company was founded by Samay Kohli and Akash Gupta, who were the developers of AcYut,  India’s first indigenously developed series of humanoid robots. Prior to starting Grey Orange, the duo represented India in robotics competitions across 13 countries and won numerous international accolades. Grey Orange was initially started as a robotics education startup but quickly pivoted to the robotics product space. The rest is history.
              </p>
              <h3>
                Supercharging logistics for e-commerce, logistics and manufacturing
              </h3>
              <p>
                Since founding in February 2011, Grey Orange has achieved an installed sortation capacity of 3+ million packets per day or 840+ million packets per year. We enjoy 90% market share in India’s warehouse automation industry and our products power 180,000+ sq ft of warehouse space in Asia. Our clients include Flipkart, Myntra, Jabong, Mahindra, DTDC, Aramex and Kerry Logistics.
              </p>
              <h3>
                Company
              </h3>
              <p>
                Grey Orange is 180+ people and growing, across its offices in New Delhi, Singapore and Hong Kong. The company has received over $30 million in funding; investors include Blume Ventures and Tiger Global.
              </p>
            </div>
            <div class="press__sidebar col-md-3 col-md-pull-9">
              <ul class="list-unstyled">
                <li>About</li>
                <!--<li><a href="#">Download Press kit</a></li>-->
                <li><a href="<?php echo get_bloginfo('url'); ?>/about/press/press-logo/">Logos and resources</a></li>
                <!--
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Contact us <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Abac1@email.com</a></li>
                    <li><a href="#">Abac2@email.com</a></li>
                    <li><a href="#">Abac3@email.com</a></li>
                    <li><a href="#">Abac4@email.com</a></li>
                  </ul>
                </li>
                -->
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>