<?php
add_action( 'wp_footer', 'script_loading_script_in_footer', 100 );
//
//
//
function create_navigation()
{
	wp_nav_menu( array(
      'theme_location'  => 'navigation-menu',
      'menu'            => '',
      'container'       => 'div',
      'container_class' => '',
      'container_id'    => 'navigation-collapse',
      'menu_class'      => 'navbar-collapse collapse',
      'menu_id'         => 'navbar',
      'echo'            => true,
      'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<div id="%1$s" class="%2$s"><ul class="nav navbar-nav navbar-right">%3$s</ul></div>',
      'depth'           => 0,
      'walker'          => new wp_bootstrap_navwalker(),
      'sort_column'     => 'menu_order'
    )
	);
}

function script_loading_script_in_footer() {
  if ( is_home() || is_front_page() ) {
  ?>
    <script>
      $(window).load(function(){
        //loading init
        $('#div-loading').fadeOut(1000);
        //click scroll
        $(".intro-butler .scroll").click(function() {
          $('html, body').animate({
              scrollTop: $(".intro-butler").offset().top
          }, 500);
        });
        //scroll

        function winResize() {
          var _win = $( window ).width();
          if (_win < 1280){
            // $('#mobile-ver').removeClass('hidden');
            // $.ajax({
            //   url: "index-mobile.html",
            //   context: document.body
            // }).done(function() {
            //   $( this ).addClass( "done" );
            // });
          }else{
            // $('#mobile-ver').addClass('hidden');
            var s = skrollr.init({forceHeight: false});
          }
        }
        winResize();
        $( window ).resize(function() {
          winResize();
        });
        //email click event
        $('.email-footer .btn').click(function() {
          // var _this = $(this);
          // _this.find('.hidden').addClass('active fade in').removeClass('hidden');
          // _this.find('.blinking-cursor').addClass('hidden');
          // _this.find('.form-control').focus();
          $('.email-footer .thanks').removeClass('hidden');
          setTimeout("$('.email-footer .thanks').addClass('hidden');", 2000);
        });
      });
    </script>
  <?php
  }
  if ( is_page_template('templates/butler.php') ) {
  ?>
    <script>
      $(window).load(function(){
        //loading init
        $('#div-loading').fadeOut(1000);
        $('.collapse').on('shown.bs.collapse', function(){
          $(this).parent().find(".arrow--down").removeClass("arrow--down").addClass("arrow--up");
        }).on('hidden.bs.collapse', function(){
          $(this).parent().find(".arrow--up").removeClass("arrow--up").addClass("arrow--down");
        });
      });
    </script>
  <?php
  }
  if ( is_page_template('templates/sorter.php') ) {
  ?>
    <script>
      $(window).load(function(){
        //loading init
        $('#div-loading').fadeOut(1000);
        $('.collapse').on('shown.bs.collapse', function(){
          $(this).parent().find(".arrow--down").removeClass("arrow--down").addClass("arrow--up");
        }).on('hidden.bs.collapse', function(){
          $(this).parent().find(".arrow--up").removeClass("arrow--up").addClass("arrow--down");
        });
      });
    </script>
  <?php
  }
}


function create_email_footer(){
  include (INC_PATH . '/email-footer.php');
}
