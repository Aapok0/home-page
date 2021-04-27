<?php
include("components/header.php")
?>

<?php
include("components/navbar.php")
?>

<section class="section container">
  <h1 class="title has-text-centered is-size-1">Skills</h1>
  <!-- SKills start -->
  <div class="columns box background-2 is-radiusless">
    <!-- First column start -->
    <div class="column m-1">
      <h2 class="title has-text-centered">Web Development</h2>
      <div class="columns box m-0 background-1 is-radiusless">
        
        <div class="column">
          <h3 class="is-size-4">HTML</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

        <div class="column">
          <h3 class="is-size-4">CSS</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

      </div><div class="columns box m-0 background-1 is-radiusless">

        <div class="column">
          <h3 class="is-size-4">SCSS</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

        <div class="column">
          <h3 class="is-size-4">PHP</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

      </div>
    </div>
    <!-- First column end -->

    <!-- Second column start -->
    <div class="column m-1">
      <h2 class="title has-text-centered">Professional skills</h2>
      <div class="columns box m-0 background-1 is-radiusless">

        <div class="column">
          <h3 class="is-size-4">Teamwork</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

        <div class="column">
          <h3 class="is-size-4">Documentation</h3>
          <svg class="skillbar" viewbox="0 0 100 100" width="200" height="200" data-percent="89">
            <circle cx="50" cy="50" r="40" />
            <text class="skilltext" x="50" y="-50" alignment-baseline="middle" stroke-width="1px" stroke="#F7F8F7" text-anchor="middle">89%</text>
          </svg>
        </div>

      </div>
    </div>
    <!-- Second column end -->
  </div>
  <!-- Skills end -->
</section>

<script src="js/progressCircle.js"></script>

<?php
include("components/footer.php")
?>