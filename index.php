<?php
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner, small introduction and call to action -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background is-transparent' src='img/header-background.jpeg' alt='Pältsan'>
  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container hero-text box has-text-centered background-1'>
      <h1 class='title is-family-code'>Hi! I'm Aapo Kokko.</h1>
      <h2 class='subtitle is-family-code'>DevOps engineer</h2>
      <p class='block is-size-5'>
        Aalto University and Metropolia graduate experienced in organization work, documentation and DevOps with studies in multiple fields. Certified in Github services and currently learning Full Stack development.
      </p>
      <!-- Call-to-action -->
      <div class='block'>
        <a href='#contact-info'><button class='button is-link has-text-weight-semibold'>Get in contact!</button></a>
      </div>
    </div>
  </div>
  <!-- Hero box end -->
</section>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>