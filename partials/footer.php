<!--CONTACT-->
<section class="contact">
    <div class="container">
      <div class="row ">
        <div class="col-md-2 d-flex flex-column">
          <h1>Useful links</h1>
          <a href=''>FAQ</a>
          <a href=''>Showcase</a>
          <a href=''>Shop</a>
          <a href=''>Etsy shop</a>
          <a href=''>Creative market</a>
        </div>  <!-- prva kolona-->
        <div class="col-md-8 text-center">
          <h1>Are we friends on Instagram?</h1>
          <p>Follow along to check out more of my work and behind the scenes !</p>
          <div class="instagram">
            <img src='img/instagram-1.jpg' alt=''>
            <img src='img/instagram-2.jpg' alt=''>
            <img src='img/instagram-3.jpg' alt=''>
            <img src='img/instagram-4.jpg' alt=''>
          </div>
          <div class="row d-flex justify-content-end">
            <a href=''><i class="fab fa-instagram text-right"></i> Follow on instagram</a>
          </div>
        </div> <!-- druga kolona-->
        <div class="col-md-2 d-flex flex-column align-items-end">
        <h1>Other links</h1>
          <a href=''>FAQ</a>
          <a href=''>Showcase</a>
          <a href=''>Shop</a>
          <a href=''>Etsy shop</a>
          <a href=''>Creative market</a>
        </div>
      </div>
    </div>
</section>

<!--FOOTER-->
  <div class="row icons conteiner pt-3 pb-1">
      <div class="col-md-6 d-flex justify-content-center mx-auto">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
      </div>
  </div>
  <div class="row footer-bottom mx-auto">
      <div class="col-md-6 container d-flex justify-content-center mx-auto">
        <p>Lovely Confetti <span><a href=''>Angelina theme.</a></span>Copyright &copy; 2020 Divi. All rights reserved. </p>
      </div> 
  </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $('.carousel').carousel({
          interval: 5000
        })
    </script>

<script>
$(document).ready(function() {

var toggleAffix = function(affixElement, scrollElement, wrapper) {

  var height = affixElement.outerHeight(),
      top = wrapper.offset().top;
  
  if (scrollElement.scrollTop() >= top){
      wrapper.height(height);
      affixElement.addClass("affix");
  }
  else {
      affixElement.removeClass("affix");
      wrapper.height('auto');
  }
    
};


$('[data-toggle="affix"]').each(function() {
  var ele = $(this),
      wrapper = $('<div></div>');
  
  ele.before(wrapper);
  $(window).on('scroll resize', function() {
      toggleAffix(ele, $(this), wrapper);
  });
  
  // init
  toggleAffix(ele, $(window), wrapper);
});

});
</script>
  </body>
</html>
