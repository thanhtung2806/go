<?php /* Template Name: Career Page */ get_header(); ?>

<!-- main content-->
<div class="main-content">
  <!-- main title -->
  <section class="main-title clearfix" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/careers/imageHeader.jpg);">
    <div class="col-sm-8 col-sm-offset-2">
      <h1 class="text-center">Careers</h1>
      <p class="h4">There are no jobs at Grey Orange, only journeys. We love what we do, learn new things while we’re at it, laugh hard when we mess things up and sweat buckets as we build and innovate.</p>

    </div>
  </section>

  <!-- press -->
  <section class="career">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row career__header">
            <div class="col-lg-8 col-lg-offset-2 ">
              <h4 class="text-center">We are always looking to welcome more like-minded people to our ever-growing family. Please get in touch if you spot something of interest.</h4>
              <h4 class="text-center">Our high-performance culture respects and recognises your talent and potential to deliver. Grade point and years of work experience are just a number that do not impress us as much as does your enthusiasm to create!</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 career__item">
              <div class="career__item__holder clearfix">
                <h4 class="h3">Research & Development</h4>
                <ul>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/software-engineering/">Software Engineering </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/mechanical-engineering/">Mechanical Engineering </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/electrical-electronics-engineering/">Electrical & Electronics Engineering </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/embedded-engineering/">Embedded Engineering </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/product-management/">Product Management </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/program-management/">Program Management</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 career__item">
              <div class="career__item__holder clearfix">
                <h4 class="h3">Manufacturing</h4>
                <ul>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/production-planning-execution/">Production Planning & Execution </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/quality-control/">Quality Control </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/supply-chain-management/">Supply Chain Management</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 career__item">
              <div class="career__item__holder clearfix">
                <h4 class="h3">Business Operations</h4>
                <ul>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/it/">IT Infrastructure </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/business-development/">Business Development </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/people-operations/">People Operations </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/finance-accounts/">Finance & Accounts</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 career__item">
              <div class="career__item__holder clearfix">
                <h4 class="h3">Customer Operations</h4>
                <ul>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/solutions-engineering-implementation/">Solutions Engineering & Implementation </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/installations-commissioning/">Installations & Commissioning </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/careers/maintenance-support/">Maintenance & Support </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="career__footer">
      <p class="h3 text-center">Meet <a href="<?php echo get_bloginfo('url'); ?>/about/our-people/">the people</a> that make us who we are.</p>
    </div>
  </section>
</div>

<?php get_footer(); ?>