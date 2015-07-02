<?php /* Template Name: Butler Page */ get_header(); ?>

<!-- main content-->
<div class="main-content">
  <!-- product intro -->
  <section class="product__intro">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="row center-all">
            <div class="col-md-4 col-sm-5 text-right">
              <h1>Butler</h1>
            </div>
            <div class="col-md-7 col-sm-7">
              <h3>Bi-directionally scalable material handling system for goods-to-man</h3>
            </div>
          </div>
          <div class="clearfix">
            <p>We designed our automated storage and goods-to-man order picking system to reduce the time it takes to get orders to homes and inventory to stores, with the flexibility to increase system storage or order fulfilment throughput - on-demand, as-needed.</p>

            <p>The Butler system takes care of the complexities of forward and reverse logistics at your fulfilment centre as your business grows. Need more storage? Configure and add Mobile Storage Units (MSUs) to your Butler-powered warehouse. Order-to-ship times increasing? Pop additional butlers into your warehouse. Need greater order fulfilment throughput? Add Pick Stations at will.</p>

            <p>Talk to us today to learn why our Butler system is your answer to shortening the order processing window in this new fulfilment paradigm of high-mix, small quantity order profiles.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- product-slide -->
  <section id="carousel-example-generic" class="carousel product-slide fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/butler/sliderPhoto/sliderPhoto01.jpg)"></div>
      </div>
      <div class="item">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/butler/sliderPhoto/sliderPhoto02.jpg)"></div>
      </div>
      <div class="item">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/butler/sliderPhoto/sliderPhoto03.jpg)"></div>
      </div>
    </div>
  </section>

  <!-- product components -->
  <section class="product__components">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="text-center clearfix">
            <h2>System Components and Specifications</h2>
            <p>The Butler system comprises of the following 5 components</p>
          </div>
          <div class="clearfix ">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title h3">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="row center-all">
                        <span class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/comp1.png" height="96" width="112" alt="" class="img-responsive center-block">
                        </span>
                        <span class="col-md-10 col-lg-11 col-sm-9 col-xs-9"><span class="h2">Butler</span></span>
                        <span class="pull-right"><i class="arrow"></i></span>
                      </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <ul class="list-unstyled">
                      <li><strong>Height of grid:</strong> max. 5.4 m</li>
                      <li><strong>Load:</strong> max. 30 kg</li>
                      <li><strong>Robot travel speed:</strong> 3.1 m/s</li>
                      <li><strong>Robot lift speed:</strong> 1.6 m/s</li>
                      <li><strong>Robot acceleration:</strong> 0.8 m/s2</li>
                      <li><strong>Throughput - bins typically retrieved:</strong> 25 bins/h</li>
                      <li><strong>Throughput - bins typically retrieved:</strong> 120 - 500 bins/h</li>
                      <li><strong>Storage capacity (inventory):</strong> 5 000 - 100 000 bins/system</li>
                      <li><strong>Inner measurement bins:</strong> 601 mm x 401 mm x 200 mm/310 mm</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title h3">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <span class="row center-all">
                        <span class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/comp2.png" height="124" width="76" alt="" class="img-responsive center-block">
                        </span>
                        <span class="col-md-10 col-lg-11 col-sm-9 col-xs-9"><span class="h2">Mobile Storage Unit</span></span>
                        <span class="pull-right"><i class="arrow"></i></span>
                      </span>

                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Waiting...
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title h3">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <span class="row center-all">
                        <span class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/comp3.png" height="112" width="98" alt="" class="img-responsive center-block">
                        </span>
                        <span class="col-md-10 col-lg-11 col-sm-9 col-xs-9"><span class="h2">Pick/Put Stations</span></span>
                        <span class="pull-right"><i class="arrow"></i></span>
                      </span>

                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Waiting...
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="heading4">
                  <h4 class="panel-title h3">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                      <span class="row center-all">
                        <span class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/comp4.png" height="137" width="73" alt="" class="img-responsive center-block">
                        </span>
                        <span class="col-md-10 col-lg-11 col-sm-9 col-xs-9"><span class="h2">Autocharger</span></span>
                        <span class="pull-right"><i class="arrow"></i></span>
                      </span>

                    </a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse" role="tabpanel" aria-labelledby="heading4">
                  <div class="panel-body">
                    Waiting...
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="heading5">
                  <h4 class="panel-title h3">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <span class="row center-all">
                      <span class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/comp5.png" height="123" width="94" class="img-responsive center-block">
                        </span>
                      <span class="col-md-10 col-lg-11 col-sm-9 col-xs-9"><span class="h2"> Butler Warehouse Control System</span></span>
                      <span class="pull-right"><i class="arrow"></i></span>

                    </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse" role="tabpanel" aria-labelledby="heading5">
                  <div class="panel-body">
                    Waiting...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product__features">
    <div class="container">
      <h2 class="text-center">Product Features</h2>
      <div class="col-lg-8 col-lg-offset-2">
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature1.png" height="180" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>No walking</h3>
            <p>Stand still and focus on order picking and inventory putting at dedicated or dual-use Pick/Put stations, while our butlers do the running around the warehouse for you.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature2.png" height="179" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>Real-time picking</h3>
            <p>Move beyond batch and wave picking and reduce order lead times. The Butler optimises your warehouse so you can focus on growing your business.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature3.png" height="180" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>On­-the­-fly ABC analysis</h3>
            <p>The Butler digests past and current order data and dynamically reslots storage racks such that fast-moving SKUs are nearer to the Pick stations.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature4.png" height="179" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>On­ demand stock audits</h3>
            <p>Audit your stock as frequently as you or your clients want without impacting your warehouse operations.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature5.png" height="179" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>Improved space utilisation</h3>
            <p>Our double-­sided storage racks permit multi-face picking and reduce aisle footprint by at least 50%.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature6.png" height="179" width="180" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>Bi­-directional growth​­</h3>
            <p>Increase storage volume and fulfillment throughput independently, by adding more storage racks or butler robots on­-demand, as­-needed.</p>
            <p>Investing in excess capacity will become a thing of the past.</p>
          </div>
        </div>
        <div class="row center-all product__features__item">
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/butler/feature7.png" height="179" width="179" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8 col-md-9">
            <h3>Intelligent charging</h3>
            <p>Our butlers perform opportunity charging so your warehouse can operate as many shifts as you need it to.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product__logo">
    <div class="container">
      <div class="row story__content">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <h2 class="text-center">Customers</h2>
              <div class="row text-center product__logo__holder">
                <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/asset/img/story/logoKerry.png" height="36" width="149" alt="" class="center-block img-responsive"></a>
                <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/asset/img/story/logoFlipkart.png" height="40" width="123" alt="" class="center-block img-responsive"></a>
                <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/asset/img/story/logoDelhivery.jpg" height="32" width="129" alt="" class="center-block img-responsive"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>