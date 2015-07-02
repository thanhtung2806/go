<?php /* Template Name: Our People */ get_header(); ?>

<!-- main content-->
  <div class="main-content">
    <!-- main title -->
    <section class="main-title text-center clearfix" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/people/headerImageFull.jpg);">
      <div class="col-sm-8 col-sm-offset-2">
        <h1>Our People</h1>
        <p class="h3">The whole is greater than the sum of our parts. We come from diverse backgrounds and are deeply passionate about the work we do.</p>
      </div>
    </section>

    <!-- list people -->
    <section class="people__list">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            
            <?php
              $args = array('post_type' => 'members', 'posts_per_page' => 0, 'order' => 'ASC',);
              $members = get_posts( $args );
              if (count($members)){
                foreach ($members as $key => $member) {
                  ?>
                  <div class="col-md-3 col-sm-4 col-xs-6 item">
                    <?php $profileUrl = get_post_meta($member->ID, 'wpcf-member-profile-url'); ?>
                    <a href="<?php echo ((is_array($profileUrl) && count($profileUrl) > 0 )?$profileUrl[0]:'#') ; ?>" target="_blank">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($member->ID) ); ?>" height="" width="" alt="" class="img-responsive">
                      <div class="infos">
                        <h4><?php echo $member->post_title; ?></h4>
                        <?php $positionOfMember = get_the_terms($member->ID, 'position-of-member'); ?>
                        <p><?php echo ((is_array($positionOfMember) && count($positionOfMember) > 0 )?$positionOfMember[0]->name:''); ?></p>
                      </div>
                    </a>
                  </div>
                  <?php
                }
              }
            ?>
            <!--
            <div class="col-md-3 col-sm-4 col-xs-6 item">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/people/teamImage1.png" height="" width="" alt="" class="img-responsive">
                <div class="infos">
                  <h4>Samay Kohli</h4>
                  <p>Co-Founders</p>
                </div>
              </a>
            </div>
            -->

            <div class="col-md-3 col-sm-4 col-xs-6 item join-item">
              <a href="<?php echo get_site_url(); ?>/about/career/">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/people/joinTeam.jpg" height="" width="" alt="" class="img-responsive">
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="people__investor">
      <div class="container text-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <h3>Investor</h3>
          <p class="h4">We are honoured to be backed by an extraordinary group of investors, advisors and mentors who have built and backed successful businesses.</p>
          <div class="row people__investor__imgs">
            <div class="col-xs-6">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/people/investorLogo1.png" alt="" class="center-block img-responsive">
            </div>
            <div class="col-xs-6">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/people/investorLogo2.png" alt="" class="center-block img-responsive">
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

<?php get_footer(); ?>