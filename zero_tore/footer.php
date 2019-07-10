<!-- Footer -->

<footer>
    <div class="container-fluid">
       <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="adress">
                         <span>Adress</span>
                         <li>
                            <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                          </li>
                          <li>
                            <p>+90 1234 56789</p>
                          </li>
                          <li>
                            <p>info@gmail.com</p>
                          </li>
                     </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="contact">
                         <span>Contact</span>
                         <li>
                            <a href="#">Home</a>
                          </li>
                          <li>
                             <a href="#">About</a>
                          </li>
                          <li>
                            <a href="#">Blog</a>
                          </li>
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                          <li>
                            <a href="#">Contact</a>
                         </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="search-text">
                        <div class="container">
                            <div class="row text-center">

                               <!-- <div class="form">
                                    <span class="header-form">SIGN UP</span>
                                    <form id="search-form" class="form-search form-horizontal">
                                        <input type="text" class="input-search" placeholder="Email Address">
                                        <button type="submit" class="btn-search"><span style="font-size:11px;">SUBMIT</span></button>
                                    </form>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <ul class="social">
                              <span>Social</span>
                               <li>
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                               </li>
                               <li>
                                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                               </li>
                               <li>
                                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                               </li>
                     </ul>
               </div>
       </div>
    </div>
</footer>
  <!-- Footer -->
  <!--Copyright-->
  <div class="footer-copyright py-3 text-center text-white">
    <?php if($copyright_txt): ?>
  	<p class="copyright">Copyright (c) <span class="copy_name"><?php echo get_option('copyright_txt'); ?></span>. All Rights Reserved.</p>
  <?php else: ?>
  	<p class="copyright">Copyright (c) <span class="copy_name"><?php bloginfo('name'); ?></span>. All Rights Reserved.</p>
  <?php endif; ?>
  </div>


  <!--/.Copyright-->
<!-- fadein -->
<script>
$(function(){
  $('.effect div, .effect i').css("opacity","0");
  $(window).scroll(function (){
    $(".effect").each(function(){
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $("i, div",this).css("opacity","1" );
        $("i",this).css({
          "font-size": "100px",
          "padding": "0 20px 40px"
        });
      } else {
        $("i, div",this).css("opacity","0" );
        $("i",this).css({
          "font-size": "20px",
          "padding": "20px"
        });
      }
    });
  });
});
// スライダー
$(function() {
  $('.slider').slick({
  // dots: true,
  infinite: true,
  // speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});
</script>

<!-- fadein -->

  <?php wp_footer(); ?>
</body>

</html>
