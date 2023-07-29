<!-- Navigation start -->
<nav class='navbar' role='navigation' aria-label='main navigation'>
  <div class='container'>
    <div class='navbar-brand'>
      <a href='index.php'>
        <img src='img/logo.png' alt='Logo' width='90' height='90'>
      </a>

      <!-- Initializes a collapsible burger-menu -->
      <a role='button' class='navbar-burger' aria-label='menu' aria-expanded='false' data-target='main_nav'>
        <span aria-hidden='true'></span>
        <span aria-hidden='true'></span>
        <span aria-hidden='true'></span>
      </a>
    </div>

    <!-- Page links with indication of which page you are on -->
    <div id='main_nav' class='navbar-menu'>
      <div class='navbar-end'>
        <?php
          include(dirname(__FILE__).'/../php/navIndicator.php');
        ?>
      </div>
    </div>
  </div>
</nav>
<!-- Navigation end -->