<?php if(function_exists('create_email_footer')){ create_email_footer(); }  ?>
    <!-- main footer -->
    <footer class="main-footer">
      <div class="clearfix">

        <div class="col-md-3">
          <h3 class="white">CAREERS <small> / <a href="<?php echo get_bloginfo('url'); ?>/about/career/">See All</a></small></h3>
          <ul class="list-unstyled">
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/software-engineering/">Software Engineering </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/mechanical-engineering/">Mechanical Engineering </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/embedded-engineering/">Embedded Engineering </a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h3 class="white">&nbsp;</h3>
          <ul class="list-unstyled">
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/production-planning-execution/">Production Planning & Execution </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/quality-control/">Quality Control </a></li>
                  <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/supply-chain-management/">Supply Chain Management</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h3 class="white">&nbsp;</h3>
          <ul class="list-unstyled">
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/it/">IT Infrastructure </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/business-development/">Business Development </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/people-operations/">People Operations </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/finance-accounts/">Finance & Accounts</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h3 class="white">&nbsp;</h3>
          <ul class="list-unstyled">
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/solutions-engineering-implementation/">Solutions Engineering & Implementation </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/installations-commissioning/">Installations & Commissioning </a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/about/career/maintenance-support/">Maintenance & Support </a></li>
          </ul>
        </div>

        <!--
        <div class="col-sm-9">
          <h3 class="white"><small class="pull-right visible-xs"><a href="#">See all</a></small>LATEST BLOGS </h3>
          <div class="row">
            <div class="col-sm-6 item">
              <h4><a href="#">Grey Orange raises Series A funding from Tiger Global and Blume Ventures</a></h4>
              <p>April 29, 2015</p>
            </div>
            <div class="col-sm-6 item">
              <h4><a href="#">Robotics – Opportunities, Challenges and the Future in India</a></h4>
              <p>April 21, 2015</p>
            </div>
          </div>
          <p class="hidden-xs"><a href="#">See all</a></p>
        </div>
        -->

      </div>

      <div class="clearfix">
        <hr>
      </div>

      <div class="clearfix adress">
        <div class="col-sm-3">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo2.png" alt="" class="logo-footer">
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-6">
              <p><img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/flagSing.png" height="13" width="" alt="" class="img-flag"> GreyOrange Pte Ltd<br>
              20 Bendemeer Road, #3-12,<br>
              CyberHub Building, Singapore - 339914<br>
              T - (+65) 6396 4460 | F - (+65) 6396 7724</p>
            </div>
            <div class="col-sm-6">
              <p><img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/flagIndia.png" height="13" width="" alt="" class="img-flag"> GreyOrange (India) Pvt Ltd <br>
              427, Pace City II, Sector 37,<br>
              Gurgaon - 122001, Haryana, India.<br>
              T - (0124) 420 6600 | F - (0124) 420 6800</p>
            </div>
          </div>
        </div>
      </div>

    </footer>
  </body>
  <?php wp_footer(); ?>
</html>