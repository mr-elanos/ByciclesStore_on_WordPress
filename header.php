<header class="header">
    <nav class="nav-menu">
      <ul class="header__ul">
        <li><a href="#" class="header__a">about us</a></li>
        <li><a href="#" class="header__a">work</a></li>
        <li>
          <?php the_custom_logo(); ?>
        </li>
        <li><a href="#" class="header__a">shop</a></li>
        <li><a href="#" class="header__a">contact</a></li>
      </ul>
    </nav>
    <div class="header__burger">
      <?php the_custom_logo(); ?>
      <div class="header__burger-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="header__burger-menu">
      <nav class="header__burger-nav">
        <ul>
          <li><a href="#">about us</a></li>
          <li><a href="#">work</a></li>
          <li><a href="#">shop</a></li>
          <li><a href="#">contact</a></li>
          <li>
            <ul class="header__burger-menu-social">
              <li><a href="#"><img src="./static/img/twiter.png" alt="twiter"></a></li>
              <li><a href="#"><img src="./static/img/facebook.png" alt="faceboock"></a></li>
              <li><a href="#"><img src="./static/img/pinterest.png" alt="pinterest"></a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>