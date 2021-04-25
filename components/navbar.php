<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="#">
        LOGO
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main_nav">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>


    <div id="main_nav" class="navbar-menu">
      <div class="navbar-end">
        <?php
          include("php/navIndicator.php");
        ?>
      </div>
    </div>
  </div>
</nav>