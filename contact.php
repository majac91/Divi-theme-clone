<?php include 'partials/header.php'; ?>
<section class="welcome d-flex flex-column justify-content-end pb-5 align-items-center">
    <h1>Say hello</h1>
    <h2>I WOULD LOVE TO HEAR FROM YOU!</h2>
</section>


<!--Form title-->
<section class="form bg-white">
<div class="row heading flex-column align-items-center">
            <h6 class='pt-5 pb-3'>Please check <a href='faq.php'>“FAQs”</a> or contact me with the following form. If you haven’t heard from me within 24 business hours, you can email me.</h6>
            <h6>info@lovelyconfetti.com</h6>
            <div class="border-right border-dark m-4"></div>
        </div>

<!--Text inputs-->
<form class='container'>
  <div class="d-flex justify-content-between">
    <div class="form-row col-md-6">
      <label for="inputEmail4"></label>
      <input type="email" placeholder='Name' class="form-control" id="inputEmail4">
    </div>
    <div class="form-row col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" placeholder='Email Address' class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <label for="inputAddress"></label>
    <input type="text" placeholder='Subject' class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <select class="form-control mb-4">
        <option>Where did you find me?</option>
        <option>Google</option>
        <option>Facebook</option>
        <option>Pinterest</option>
        <option>Instagram</option>
    </select>
  </div>
  <!--Checkboxes-->
  <h6>I have a question about..</h6>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    A general question
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Product purchased
  </label>
</div>
<!--Text area-->
<div class="form-group my-4">
    <label for="Textarea1"></label>
    <textarea class="form-control" placeholder='Message' id="Textarea1" rows="8"></textarea>
  </div>
  <!--Privacy policy-->
  <h6>Please, read and agree to the Privacy Policy</h6>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    I agree with the <a class='text-dark' href=''>Privacy policy</a>
  </label>
</div>
</form><!--FORM END-->

<!--Submit-->
<form class="form-inline container">
    <p>8 + 11 =</p>
  <div class="form-group mx-sm-3 mb-2 d-flex align-items-center">
    <label class="sr-only">Number</label>
    <input type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit your question</button>
</form>

<!--Hours-->
<section class='hours d-flex flex-column justify-content-center align-items-center'>
    <h5 class='pb-3'>HOURS</h5>
    <h1>MONDAY – FRIDAY | 9:00 a.m – 6:00 p.m</h1>
    <h1 class='pb-5'>SATURDAY – SUNDAY |  Offline</h1>
    <h5 class='pb-3'>LOCATION</h5>
    <h1>Madrid, Spain</h1>
</section>

<section class="subscribe container-fluid text-white">
    <div class="row justify-content-start align-items-center">
      <div class="col-md-6">
        <h3>HEY THERE!</h3>
        <p>Don’t ever miss any of my freebies! Leave me your e-mail address and be the first to know when something new appears on my site.</p>
      </div>
      <div class="col-md-6 d-flex flex-column">
        <input type='text' class='mb-3 mt-5'>
        <input type='button' value='SING ME UP!'>
    </div>
    </div>
  </section>
</section>
<?php include 'partials/footer.php'; ?>
