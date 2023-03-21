<footer class="footer" >

      <span>All Rights Reserved</span>
    </footer>
    <?php wp_footer(); ?>
  <script>
$(document).ready(function(){
    $('.bxslider').bxSlider({
      controls:true,
      captions: true,
      stopAutoOnClick: true,
      pager: false,
      minSlides:3,
      maxSlides:3,
      moveSlides:1,
      slideMargin:75, 
      infiniteLoop:true,
      slideWidth: 400,
      autoControls:true,  
         
    });
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.header').addClass('header_fixed');
    } else {
        $('.header').removeClass('header_fixed');
    }
});
 AOS.init();
  </script>
  </body>
</html>