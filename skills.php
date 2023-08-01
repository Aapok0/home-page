<?php
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner, small introduction and call to action -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='img/background.jpeg' alt='Background image of Pältsan'>

  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container box has-text-centered background-2'>
      <h1 class='title is-family-code is-size-1'>Skills</h1>

      <!-- Columns start -->
      <div class='columns box background-2'>
        <!-- First column start -->
        <div class='column m-1'>

          <!-- Development start -->
          <h2 class='title is-family-code'>Development</h2>
          <div class='is-flex-direction-column background-1'>
            
            <!-- Web development start -->
            <h3 class='is-size-3'>Web development</h3>
            <svg class='skillbar bar_web' viewbox='0 0 100 100' width='200' height='200' data-percent='60'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_web' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>60</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-4'>HTML</h3>
              <progress class="progress is-warning" value="80" max="100">90%</progress>
              <h3 class='is-size-4'>CSS</h3>
              <progress class="progress is-warning" value="75" max="100">75%</progress>
              <h3 class='is-size-4'>Javascript</h3>
              <progress class="progress is-warning" value="60" max="100">60%</progress>
              <h3 class='is-size-4'>PHP</h3>
              <progress class="progress is-warning" value="15" max="100">15%</progress>
              <h3 class='is-size-4'>React</h3>
              <progress class="progress is-warning" value="35" max="100">45%</progress>
            </div>
            <!-- Web development end -->

            <!-- Programming/scripting start -->
            <h3 class='is-size-3'>Programming/scripting</h3>
            <svg class='skillbar bar_prog' viewbox='0 0 100 100' width='200' height='200' data-percent='50'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_prog' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>50</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-4'>Python</h3>
              <progress class="progress is-warning" value="70" max="100">70%</progress>
              <h3 class='is-size-4'>C</h3>
              <progress class="progress is-warning" value="25" max="100">25%</progress>
              <h3 class='is-size-4'>Shell script</h3>
              <progress class="progress is-warning" value="50" max="100">50%</progress>
            </div>
            <!-- Programming/scripting end -->
          
          </div>
          <!-- Development end -->
        </div>
        <!-- First column end -->

        <!-- Second column start -->
        <div class='column m-1'>
          <!-- Services and tools start -->
          <h2 class='title is-family-code'>Services and tools</h2>
          <div class='is-flex-direction-column background-1'>
            
            <!-- Cloud start -->
            <h3 class='is-size-3'>Cloud</h3>
            <svg class='skillbar bar_cloud' viewbox='0 0 100 100' width='200' height='200' data-percent='55'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_cloud' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>55</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-4'>Azure</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-4'>AWS</h3>
              <progress class="progress is-warning" value="10" max="100">10%</progress>
            </div>
            <!-- Cloud end -->

            <!-- IaC start -->
            <h3 class='is-size-3'>Infrastructure as Code</h3>
            <svg class='skillbar bar_iac' viewbox='0 0 100 100' width='200' height='200' data-percent='45'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_iac' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>45</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-4'>Ansible</h3>
              <progress class="progress is-warning" value="55" max="100">55%</progress>
              <h3 class='is-size-4'>Terraform</h3>
              <progress class="progress is-warning" value="20" max="100">20%</progress>
            </div>
            <!-- IaC end -->

            <!-- Tools start -->
            <h3 class='is-size-3'>Terminal tools</h3>
            <svg class='skillbar bar_term' viewbox='0 0 100 100' width='200' height='200' data-percent='50'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_term' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>45</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-4'>Git</h3>
              <progress class="progress is-warning" value="60" max="100">60%</progress>
              <h3 class='is-size-4'>Vim/Neovim</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-4'>tmux</h3>
              <progress class="progress is-warning" value="45" max="100">45%</progress>
            </div>
            <!-- Tools end -->
          
          </div>
          <!-- Services and tools end -->
        </div>
        <!-- Second column end -->
      </div>
      <!-- Columns end -->

      <!-- Button to resume -->
      <div class='block has-text-centered'>
        <a href='interests.php'><button class='button is-link has-text-weight-semibold'>Read about my interests</button></a>
      </div>

    </div>
  </div>
  <!-- Hero box end -->
</section>

<script src='js/progressCircle.js'></script>
<script src='js/progressNumber.js'></script>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>