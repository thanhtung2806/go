<?php /* Template Name: Career Apply Page */ get_header(); ?>

<!-- main content-->
<div class="main-content">

  <!-- press -->
  <section class="career career--apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row career__header">
            <div class="col-lg-8 col-lg-offset-2">
              <h3 class="h2">Engineering Manager</h3>
            </div>
          </div>

          <div class="row career--apply__form clearfix">
            <div class="col-lg-8 col-lg-offset-2">
              <h3>FILL IN YOUR APPLICATION</h3>
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="input1" class="col-sm-3 control-label">Resume/CV</label>
                  <div class="col-sm-8">
                    <input class="inline-upload" type="file">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input1" class="col-sm-3 control-label">Full name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="input1" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-3 control-label">Phone</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="input2" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input3" class="col-sm-3 control-label">LinkedIn URL</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="input3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input4" class="col-sm-3 control-label">Other website</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="input4" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input4" class="col-sm-3 control-label">Other information</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" placeholder="Tell us anything you want to share"></textarea>
                  </div>
                </div>
                <div class="form-group form-button">
                  <div class="">
                    <button type="submit" class="btn btn-orange center-block btn-lg">Submit application</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>