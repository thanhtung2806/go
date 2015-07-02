<?php /* Template Name: Home Page */ get_header(); ?>

<!-- home slide -->
  <section id="carousel-example-generic" class="carousel home-slide fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/home/sliderImage1.jpg)"></div>
        <div class="carousel-caption">
          <h3 class="h2">The next big leap is here</h3>
          <p>We design, manufacture and deploy advanced robotics systems for automation at distribution and fulﬁllment centres.</p>
        </div>
      </div>
      <div class="item">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/home/sliderImage2.jpg)"></div>
        <div class="carousel-caption">
          <h3 class="h2">Flexible, Scalable</h3>
          <p>Boost productivity up to 10X by automating storage and order picking at your warehouse.</p>
        </div>
      </div>
      <div class="item">
        <div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/home/sliderImage3.jpg)"></div>
        <div class="carousel-caption">
          <h3 class="h2">Fast, Accurate, Affordable</h3>
          <p>Speed up order consolidation and routing by 10X while enjoying low TCO and fast ROI.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="homepage-desktop">
    <!-- intro butler -->
    <section class="intro-butler">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/scroll.png" alt="" class="animated scroll bounce infinite" data-80="opacity:1;" data-150="opacity:0;">
      <div class="container">
        <div class="col-sm-6">
          <h1>THE BUTLER</h1>
          <p>We designed the Butler to be the most advanced automated storage and goods-to-man order picking system in the world.</p>
          <p>Created from the perfect union of hardware and software, the Butler is ideal for e-Commerce, logistics and manufacturing warehouse operations that deal with high-mix, high-volume order proﬁles.</p>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bigbutler.png" alt="" class="center-block img-responsive">
        </div>
      </div>
    </section>

    <!-- door -->
    <section class="door">
      <div class="door-holders">
        <div class="door-holder">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/door.png" alt="" class="center-block img-door img-responsive">
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/computer.png" alt="" class="img-computer img-responsive hidden-xs">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="bulter" data-0="display: none;" data-820="display: block;" data-1750="display: none;" data-9280="display: none;">
      </div>
    </section>

    <!-- walking -->
    <section class="walking">
      <div class="clearfix">
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/craft.png" alt="" class="center-block img-walking img-responsive">
        </div>
        <div class="col-sm-2">
          <div class="hero-holder" data-0="display: block;" data-1801=" display: none;">
            <div class="hero-rack clearfix">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRack.png" alt="" class="rack" data-1785="top: 0px;" data-1800="top: -30px;">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRackShadow.png" alt="" class="shadow" data-1785="bottom: 0px;" data-1800="bottom: 30px;">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="box" data-1785="top: 27px;" data-1800="top: -3px;">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="bulter" data-0="opacity: 0;" data-1749="opacity: 0;" data-1750="opacity: 1;">
            </div>
          </div>

          <div class="hero-holder-pof" data-0="display: none;" data-1801=" display: block;" data-3720="display: block; opacity: 1;" data-3790="opacity: 0;" data-4290="opacity: 0;" data-4360="opacity: 1;" data-8392="display: none;">
            <div class="hero-rack clearfix">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRack.png" alt="" class="rack">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRackShadow.png" alt="" class="shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="bulter">
            </div>
          </div>
        </div>
        <div class="col-sm-3 infos">
          <div class="infos-holder">
            <h2 class="orange h1">No walking</h2>
            <p>Stand still and focus on order picking and inventory putting at dedicated or dual-use Pick/Put stations, while our butlers do the running around the warehouse for you.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- picking -->
    <section class="picking">
      <div class="clearfix first-intro">
        <div class="col-sm-3 text-right col-sm-offset-1 infos">
          <h2 class="orange h1">Real-time Picking</h2>
          <p>Move beyond batch and wave picking and reduce order lead times. The Butler optimises your warehouse so you can focus on growing your business.</p>
        </div>
        <div class="col-sm-6 col-sm-offset-2 img-holder text-right">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/pickStation.png" alt="" class="img-responsive" width="500">
        </div>
      </div>

      <div class="clearfix second-intro">
        <div class="col-sm-6 img-holder text-left">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/putStation.png" alt="" class="img-responsive" width="500">
        </div>
        <div class="col-sm-6 img-holder">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/forklift.png" alt="" class="img-responsive center-block">
        </div>
      </div>
    </section>

    <!-- analysis -->
    <section class="analysis">
      <div class="clearfix">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/monitor.png" alt="" class="img-responsive center-block">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/monitorBox.png" alt="" class="img-monitor" data-0="display: none;" data-3770="display: block; opacity: 0;" data-3790="opacity: 1;" data-4290="opacity: 1;" data-4300="opacity: 0;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/monitorBox2.png" alt="" class="img-monitor2" data-4000="transform: translateX(0rem);" data-4200="transform: translateX(30.4rem);">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/monitorBox2.png" alt="" class="img-monitor3" data-4000="transform: translateY(0rem);" data-4200="transform: translateY(-29.7rem);">

        <div class="col-md-3 col-sm-4 infos">
          <h2 class="orange h1">
            <strong>On­-the­-fly</strong> <br> ABC analysis
          </h2>
          <p>The Butler digests past and current order data and dynamically reslots storage racks such that fast&#45;moving SKUs are nearer to the Pick stations.</p>
        </div>
      </div>
    </section>

    <!-- stock -->
    <section class="stock">
      <div class="clearfix">
        <div class="col-sm-3 col-sm-offset-1 infos text-right">
          <h2 class="orange h1">On­ demand stock audits</h2>
          <p>Audit your stock as frequently as you or your clients want without impacting your warehouse operations.</p>
        </div>
        <div class="col-sm-6 col-sm-offset-2">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/stockAudit.png" alt="" class="center-block img-walking img-responsive">
        </div>
      </div>
    </section>

    <!-- space -->
    <section class="space">
      <div class="clearfix first-intro">
        <div class="col-sm-5 img-holder">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack2.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack3.png" alt="" data-5800="transform: translateY(0px);" data-5850="transform: translateY(-30px);">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor-1 img-monitor">
        </div>
        <div class="col-sm-3 col-sm-offset-3">
          <h2 class="orange h1">Improved space utilisation​­</h2>
          <p>Our double&#45;sided storage racks permit multi&#45;face picking and reduce aisle footprint by at least 50%.</p>
        </div>
      </div>
      <div class="clearfix second-intro">
        <div class="col-sm-5 img-holder">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack4.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack5.png" alt="" data-6150="transform: translateY(0px);" data-6300="transform: translateY(-30px);">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack6.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor-2 img-monitor">
        </div>
        <div class="col-sm-5 col-sm-offset-2 img-holder text-right">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack7.png" alt="" data-6150="transform: translateY(0px);" data-6300="transform: translateY(-30px);">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack8.png" alt="" >
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack9.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor-3 img-monitor">
        </div>
      </div>
    </section>

    <!-- growth -->
    <section class="growth">
      <div class="clearfix intro">
        <div class="col-sm-3 col-sm-offset-8">
          <h2 class="orange h1">Bi­-directional growth​­</h2>
          <p>Increase storage volume and fulfillment throughput independently, by adding more storage racks or butler robots on­-demand, as­-needed.</p>
		  <p>Investing in excess capacity will become a thing of the past.</p>
        </div>
      </div>
      <div class="clearfix img-holder">
        <div class="col-sm-4 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-6 item">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack10.png" alt="" class="center-block">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor" data-7075="transform: translateY(0px);" data-7635="transform: translateY(550px);">
            </div>
            <div class="col-sm-6 item">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack11.png" alt="" class="center-block">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor" data-7075="transform: translateY(0px);" data-7635="transform: translateY(555px);">
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-sm-offset-2">
          <div class="row">
            <div class="col-sm-6 item">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack12.png" alt="" class="center-block">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor" data-7075="transform: translateY(0px);" data-7635="transform: translateY(555px);">
            </div>
            <div class="col-sm-6 item">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/rack13.png" alt="" class="center-block">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="img-monitor" data-7075="transform: translateY(0px);" data-7635="transform: translateY(555px);">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- charging -->
    <section class="charging">
      <div class="clearfix first-intro">
        <div class="col-sm-6 img-holder">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/computer2.png" alt="" class="center-block">
        </div>
        <div class="col-sm-3 col-sm-offset-2 infos">
          <h2 class="orange h1">Intelligent charging</h2>
          <p>Our butlers perform opportunity charging so your warehouse can operate as many shifts as you need it to.</p>
        </div>
      </div>
      <div class="clearfix second-charge">
        <div class="col-sm-4 col-sm-offset-4">
          <div class="line-horizontal"></div>
          <div class="hero-holder" data-0="display: none;" data-8392="display: block;">
            <div class="hero-rack clearfix">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/bulter.png" alt="" class="bulter" data-8394="transform: translateX(0px);" data-8494="transform: translateX(315px);">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRack.png" alt="" class="rack center-block">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/heroRackShadow.png" alt="" class="shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="box" data-8394="opacity: 1;" data-8594="opacity: 0;">
            </div>
          </div>
        </div>

        <div class="col-sm-2 state">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/charging1.png" alt="" class="center-block" data-8094="visibility:hidden;" data-8494="visibility:visible;">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/charging2.png" alt="" class="center-block" data-8094="visibility:hidden;" data-8504="visibility:visible;">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/charging3.png" alt="" class="center-block" data-8094="visibility:hidden;" data-8514="visibility:visible;">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/charging4.png" alt="" class="center-block" data-8094="visibility:hidden;" data-8524="visibility:visible;">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/charger.png" alt="" class="center-block img-charger">
        </div>
      </div>
    </section>

    <div class="space-hack"></div>

    <!-- intro sorter -->
    <section class="intro-sorter clearfix">
      <div class="clearfix infos col-sm-12">
        <div class="col-sm-4 col-sm-offset-4 holder">
          <h1 class="orange">The Sorter</h1>
          <p>Sorter be nimble, Sorter be quick.</p>
          <p>With the Sorter, we didn't reinvent the wheel; we simply made it spin better. Our advanced outbound parcel sortation system is engineered to give you the best sortation productivity per unit area of installed footprint, with low total-cost-of-ownership and fast return-on-investment.</p>
        </div>
      </div>
<!--       <div class="box" data-8054="transform: translateY(0rem);" data-8254="transform: translateY(20rem);" data-8854="transform: translateY(-20rem);" data-11290="transform: translateY(-20rem);" data-12218="transform: translateY(-13rem);" data-13003="transform: translateY(-6.6rem);">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxGrey.png" alt="" class="boxGrey center-block" data-8904="opacity: 0;" data-8954="opacity: 1;" data-12627="visibility:visible;" data-10900="margin-top:5rem;" data-11400="margin-top:10rem;" data-13110="transform: translateY(0rem);" data-13410="transform: translateY(24.5rem);" data-13550="visibility:hidden;">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="boxOrange center-block" data-8604="opacity: 0;" data-8724="opacity: 1; visibility:visible;" data-10700="margin-top:5rem;" data-11200="margin-top:10rem;" data-12963="visibility:visible;" data-13004="visibility:hidden;">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxBeige.png" alt="" class="boxBeige center-block" data-8690="opacity: 0;" data-8754="opacity: 1; visibility:visible;" data-10500="margin-top:5rem;" data-11000="margin-top:10rem;" data-12219="visibility:hidden;">

      </div> -->

      <div class="box" data-8054="transform: translateY(0rem);" data-8254="transform: translateY(20rem);" data-8854="transform: translateY(-20rem);" data-11290="transform: translateY(-20rem);" data-12218="transform: translateY(-15rem);" data-13003="transform: translateY(-6.6rem);">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxGrey.png" alt="" class="boxGrey center-block" data-8904="opacity: 0;" data-8954="opacity: 1;" data-12627="visibility:visible;" data-10900="margin-top:5rem;" data-11400="margin-top:10rem;" data-13180="transform: translateY(0rem);" data-13410="transform: translateY(24.5rem);" data-13683="visibility:hidden;">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="boxOrange center-block" data-8604="opacity: 0;" data-8724="opacity: 1; visibility:visible;" data-10700="margin-top:5rem;" data-11200="margin-top:10rem;" data-12963="visibility:visible;" data-13134="visibility:hidden;">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxBeige.png" alt="" class="boxBeige center-block" data-8690="opacity: 0;" data-8754="opacity: 1; visibility:visible;" data-10500="margin-top:5rem;" data-11000="margin-top:10rem;" data-12340="visibility:hidden;">

      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/motor0.png" alt="" class="motor">
    </section>

    <!-- process sorter -->
    <section class="process-sorter">
      <div class="clearfix item">
        <div class="col-sm-3 col-sm-offset-1 text-right">
          <h2 class="orange h1">All Shapes and Sizes</h2>
          <p>Dimensioning and sortation systems have been around before us, but they handle only regular or irregular shaped packets. We built the Sorter so one size fits all.</p>
        </div>

      </div>
      <div class="clearfix item">
        <div class="col-sm-3 col-sm-offset-8">
          <h2 class="orange h1">Low TCO, Fast ROI​­</h2>
          <p>Our clients can’t stop smiling when the Sorter gives them a TCO reduction of nearly 100% and ROI of 3 - 12 months.</p>
        </div>

      </div>
      <div class="clearfix item">
        <div class="col-sm-3 col-sm-offset-1 text-right">
          <h2 class="orange h1">Continuous Parcel Induction​­</h2>
          <p>Achieve higher sortation throughout by adding our dynamic spacer to your Sorter configuration. Parcels can be properly sorted even when they are less than a centimetre apart.</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/motor.png" alt="" class="motor motor-top">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/motor.png" alt="" class="motor motor-bot">
      </div>

      <div class="clearfix item dimension-item">
        <div class="col-sm-3 col-sm-offset-8">
          <h2 class="orange h1">Faster, cheaper, better​­</h2>
          <p>Scan and sort parcels of all types and sizes quickly and accurately for distribution or fulfillment at average speeds of 1,500, 3,000 or 6,000 parcels per hour.</p>
		  <p>Stop thinking, start sorting!</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/blueLight.png" alt="" class="blueLight">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/wHScan.png" alt="" class="wHScan">
      </div>
      <div class="clearfix item faster-item">
        <div class="col-sm-3 col-sm-offset-1 text-right">
          <h2 class="orange h1">100% Dimensioning and Weighing​­ </h2>
          <p>People are made for more than just measuring and weighing parcels. They are also much slower and less accurate at the task. Add our dimensioning and weighing unit to your system configuration and let our Sorter deal with it, be it 100 or 100,000 parcels a day.</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/motor.png" alt="" class="motor motor-top">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/motor.png" alt="" class="motor motor-bot">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/scan2.png" alt="" class="scan2">
      </div>
      <div class="clearfix item modular-item" >
        <div class="col-sm-3 col-sm-offset-8">
          <h2 class="orange h1">Modular implementation​­ </h2>
          <p>Our Sorter grows as your business grows. We designed the Sorter to be easily configured depending on our customers' needs and budget.</p>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft0.png" alt="" class="armLeft">
<!--         <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft1.png" alt="" class="armLeft" data-12188="visibility:hidden;" data-12388="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleLeft" data-12210="transform: rotate(70deg); margin-top: -22px; margin-left: -160px;" data-12288="transform: rotate(0deg); margin-top: 0px; margin-left: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxBeige.png" alt="" class="boxBeige center-block" data-11983="visibility:hidden;" data-12219="visibility:visible;" data-12222="transform: translateX(0rem);" data-12250="transform: translateX(-15rem);" data-12350="transform: translateX(-35rem);"> -->

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft1.png" alt="" class="armLeft" data-12440="visibility:hidden;" data-12640="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleLeft" data-12338="transform: rotate(70deg); margin-top: -22px; margin-left: -160px;" data-12410="transform: rotate(0deg); margin-top: 0px; margin-left: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxBeige.png" alt="" class="boxBeige center-block" data-11983="visibility:hidden;" data-12340="visibility:visible;" data-12344="transform: translateX(0rem);" data-12380="transform: translateX(-15rem);" data-12440="transform: translateX(-35rem);">


        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armRight0.png" alt="" class="armRight">

<!--         <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armRight1.png" alt="" class="armRight" data-13110="visibility:hidden;" data-13160="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleRight" data-13010="transform: rotate(-70deg); margin-top: -27px; margin-right: -164px;" data-13110="transform: rotate(0deg); margin-top: 0px; margin-right: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="boxOrange center-block" data-12388="visibility:hidden;" data-13004="visibility:visible;" data-13010="transform: translateX(0rem);" data-13110="transform: translateX(35rem);"> -->

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armRight1.png" alt="" class="armRight" data-13234="visibility:hidden;" data-13334="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleRight" data-13134="transform: rotate(-70deg); margin-top: -27px; margin-right: -164px;" data-13224="transform: rotate(0deg); margin-top: 0px; margin-right: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxOrange.png" alt="" class="boxOrange center-block" data-12388="visibility:hidden;" data-13134="visibility:visible;" data-13135="transform: translateX(0rem);" data-13234="transform: translateX(35rem);">

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/delivery.png" alt="" class="delivery">

      </div>
      <div class="clearfix item try-item">
        <div class="col-sm-3 col-sm-offset-8">
          <h2 class="orange h1">Tried and tested​­</h2>
          <p>We must have done something right.</p>
		      <p>The Sorter enjoys 90% market share in the warehouse sortation segment on the Indian subcontinent, and boast an installed sortation throughput in excess of 3 million parcels every day.</p>
        </div>
<!--         <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft0.png" alt="" class="armLeft">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft1.png" alt="" class="armLeft" data-13555="visibility:hidden;" data-13805="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleLeft" data-13545="transform: rotate(70deg); margin-top: -22px; margin-left: -160px;" data-13755="transform: rotate(0deg); margin-top: 0px; margin-left: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxGrey.png" alt="" class="boxGrey center-block" data-13250="visibility:hidden;" data-13550="visibility:visible;" data-13555="transform: translateX(0rem);" data-13755="transform: translateX(-35rem);"> -->

        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft0.png" alt="" class="armLeft">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armLeft1.png" alt="" class="armLeft" data-13783="visibility:hidden;" data-13883="visibility:visible;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/armSingle.png" alt="" class="armSingleLeft" data-13683="transform: rotate(70deg); margin-top: -22px; margin-left: -160px;" data-13753="transform: rotate(0deg); margin-top: 0px; margin-left: -143px;">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home/boxGrey.png" alt="" class="boxGrey center-block" data-13250="visibility:hidden;" data-13683="visibility:visible;" data-13688="transform: translateX(0rem);" data-13787="transform: translateX(-35rem);">
      </div>
    </section>
  </div>

  <div class="homepage-mobile">
    <!-- intro butler -->
    <section class="intro-butler">
      <div class="container">
        <div class="col-sm-7 col-lg-6">
          <h1>THE BUTLER</h1>
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/bulterBig.png" height="" width="150" alt="" class="center-block img-responsive visible-xs">
          <p>We designed the Butler to be the most advanced automated storage and goods-to-man order picking system in the world.</p>
          <p>Created from the perfect union of hardware and software, the Butler is ideal for e&#45;commerce, logistics and manufacturing warehouse operations that deal with high-mix, high-volume order proﬁles.</p>
        </div>
        <div class="col-sm-5 col-lg-6">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/bulterBig.png" height="" width="200" alt="" class="center-block img-responsive hidden-xs">
        </div>
      </div>
    </section>


    <!-- walking -->
    <section class="walking">
      <div class="container">
        <div class="col-sm-7 col-md-8 infos">
          <div class="infos-holder">
            <h2 class="orange h1">No walking</h2>
            <p>Stand still and focus on order picking and inventory putting at dedicated or dual-use Pick/Put stations, while our butlers do the running around the warehouse for you.</p>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/noWalking.png" height="auto" width="237" alt="" class="center-block img-responsive img-mobile">
        </div>

      </div>
    </section>

    <!-- picking -->
    <section class="picking">
      <div class="container">
        <div class="col-sm-6 col-sm-push-6 text-right-md">
          <h2 class="orange h1">Real-time Picking</h2>
          <p>Move beyond batch and wave picking and reduce order lead times. The Butler optimises your warehouse so you can focus on growing your business.</p>
        </div>
        <div class="col-sm-6 col-sm-pull-6">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/pickPutStation.png" height="" alt="" class="img-responsive center-block" width="">
        </div>
      </div>
    </section>

    <!-- analysis -->
    <section class="analysis">
      <div class="container">
        <div class="col-sm-6 col-md-8">
          <h2 class="orange h1">
            <strong>On­-the­-fly</strong> <br> ABC analysis
          </h2>
          <p>The Butler digests past and current order data and dynamically reslots storage racks such that fast&#45;moving SKUs are nearer to the Pick stations.</p>
        </div>
        <div class="col-sm-6 col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/monitor.png" alt="" class="img-responsive center-block img-mobile">
        </div>
      </div>
    </section>

    <!-- stock -->
    <section class="stock">
      <div class="container">
        <div class="col-sm-7 col-sm-push-5 text-right-md">
          <h2 class="orange h1">On­ demand stock audits</h2>
          <p>Audit your stock as frequently as you or your clients want without impacting your warehouse operations.</p>
        </div>
        <div class="col-sm-5 col-sm-pull-7">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/stockAudit.png" alt="" class="center-block img-responsive">
        </div>
      </div>
    </section>

    <!-- space -->
    <section class="space">
      <div class="container">
        <div class="col-sm-7">
          <h2 class="orange h1">Improved space utilisation​</h2>
          <p>Our double&#45;sided storage racks permit multi&#45;face picking and reduce aisle footprint by at least 50%.</p>
        </div>
        <div class="col-sm-5">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/rackGroup.png" height="554" width="533" alt="" class="img-responsive center-block img-mobile">
        </div>
      </div>
    </section>

    <!-- growth -->
    <section class="growth">
      <div class="container">
        <div class="col-sm-7 col-sm-push-5 text-right">
          <h2 class="orange h1">Bi­-directional growth​­</h2>
          <p>Increase storage volume and fulfillment throughput independently, by adding more storage racks or butler robots on&#45;demand, as&#45;needed.</p>
          <p>Investing in excess capacity will become a thing of the past.</p>
        </div>
        <div class="col-sm-5 col-sm-pull-7">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/butlerGroup.png" height="346" width="466" alt="" class="img-responsive center-block img-mobile">
        </div>
      </div>
    </section>

    <!-- charging -->
    <section class="charging">
      <div class="container">
        <div class="col-sm-7">
          <h2 class="orange h1">Intelligent charging</h2>
          <p>Our butlers perform opportunity charging so your warehouse can operate as many shifts as you need it to.</p>
        </div>
        <div class="col-sm-5">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/charger.png" height="352" width="512" alt="" class="center-block img-responsive img-mobile">
        </div>
      </div>
    </section>

    <!-- intro sorter -->
    <section class="intro-sorter">
      <div class="container">
        <div class="holder">
          <h1 class="orange h1">The Sorter</h1>
          <p>Sorter be nimble, Sorter be quick.</p>
          <p>With the Sorter, we didn't reinvent the wheel; we simply made it spin better. Our advanced outbound parcel sortation system is engineered to give you the best sortation productivity per unit area of installed footprint, with low total-cost-of-ownership and fast return-on-investment.</p>
        </div>
      </div>
    </section>

    <section class="sorter-elements">
      <div class="container">
        <div class="clearfix">
          <div class="col-sm-6 col-sm-offset-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/motor1.png" height="" width="206" alt="" class="center-block motor1">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
             <h2 class="orange h1">All Shapes and Sizes</h2>
            <p>Dimensioning and sortation systems have been around before us, but they handle only regular or irregular shaped packets. We built the Sorter so one size fits all.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/boxGroup.png" height="" width="60" alt="" class="center-block">
          </div>
        </div>
        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">Low TCO, Fast ROI​­</h2>
            <p>Our clients can’t stop smiling when the Sorter gives them a TCO reduction of nearly 100% and ROI of 3 - 12 months.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/boxOrange.png" height="" width="60" alt="" class="center-block">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">Continuous Parcel Induction​­</h2>
            <p>Achieve higher sortation throughout by adding our dynamic spacer to your Sorter configuration. Parcels can be properly sorted even when they are less than a centimetre apart.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/motor2.png" height="" width="214" alt="" class="center-block motor2">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/boxOrange.png" height="" width="60" alt="" class="center-block">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/motor2.png" height="" width="214" alt="" class="center-block motor2">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">Faster, cheaper, better​­</h2>
            <p>Scan and sort parcels of all types and sizes quickly and accurately for distribution or fulfillment at average speeds of 1,500, 3,000 or 6,000 parcels per hour.</p>
            <p>Stop thinking, start sorting!</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/motor2.png" height="" width="214" alt="" class="center-block motor2">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/scan1.png" height="" width="254" alt="" class="center-block ">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">100% Dimensioning and Weighing​­ </h2>
            <p>People are made for more than just measuring and weighing parcels. They are also much slower and less accurate at the task. Add our dimensioning and weighing unit to your system configuration and let our Sorter deal with it, be it 100 or 100,000 parcels a day.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/motor2.png" height="" width="214" alt="" class="center-block motor2">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/scan2.png" height="" width="272" alt="" class="center-block scan2">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">Modular implementation​­ </h2>
            <p>Our Sorter grows as your business grows. We designed the Sorter to be easily configured depending on our customers' needs and budget.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/sorterArm1.png" height="" width="269" alt="" class="sort1">
          </div>
        </div>

        <div class="clearfix">
          <div class="col-sm-6 bg-overlay">
            <h2 class="orange h1">Tried and tested​</h2>
            <p>We must have done something right.</p>
            <p>The Sorter enjoys 90% market share in the warehouse sortation segment on the Indian subcontinent, and boast an installed sortation throughput in excess of 3 million parcels every day.</p>
          </div>
          <div class="col-sm-6 img-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/home-mobile/sorterArm2.png" height="" width="269" alt="" class="sort2">
          </div>
        </div>
      </div>
    </section>
  </div>

<div class="text-center hidden" id="mobile-ver">
  <h2>Mobile version is under development.</h2>
</div>

<!-- loading -->
<div class="load-holder center-all" id="div-loading">
  <div class="square-spin"><div></div></div>
</div>


<?php get_footer(); ?>