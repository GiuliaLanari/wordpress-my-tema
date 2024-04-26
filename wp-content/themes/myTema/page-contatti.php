<?php
get_header();
the_post(); ?>

<h1 class="text-center my-5 display-3"><?php the_title(); ?></h1>
<div class="col-12 col-md-5 mx-auto">
<!-- <form action="//<//?//php site_url("/submit-form.php")?>" method="post" class="d-flex flex-column">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <input type="text" class="form-control " id="message" name="message">
  </div>
  
  <button type="submit" class="btn btn-primary ms-auto">Submit</button>

</form> -->

<div >
    <?php the_content(); ?>
</div>

</div>

<?php
get_footer();