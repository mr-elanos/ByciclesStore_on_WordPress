<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="bycicle, shop, vintage, store">
  <meta name="description" content="This is the bycicles store">
  <meta name="robots" content="index, follow">
  <title>Bycicles store</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <?php wp_head(); ?> 
</head>

<body>
  <?php get_header(); ?>
  <main>
    <section class="generation">
      <div class="container">
        <div class="generation__content">
          <div class="generation__logo">
            <img src="./static/img/icon_1.png" alt="generation logo" />
          </div>
          <h1 class="generation__title title">
            A NEW GENERATION OF VINTAGE BIKE
          </h1>
          <p class="generation__text text">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged.
          </p>
        </div>
      </div>
    </section>
    <div class="vintage">
      <div class="vintage__container">
        <div class="vintage__left">
          <div>
            <img src="./static/img/logo_1.png" alt="vintage" />
          </div>
        </div>
        <div class="vintage__right columns-content">
          <article class="vintage__content column-content">
            <div class="vintage__logo">
              <img src="./static/img/icon_2.png" alt="vintage logo" />
            </div>
            <h2 class="vintage__title title">vintage Oliva</h2>
            <p class="vintage__text text text-style">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy
              text ever since the 1500s, when an unknown printer took a galley
              of type and scrambled it to make a type specimen book. It has
              survived.
            </p>
          </article>
          <div class="vintage__img">
            <img src="./static/img/block1_2.webp" alt="vintage img" />
          </div>
        </div>
      </div>
    </div>
    <div class="boriosa">
      <div class="full-container">
        <div class="boriosa__left columns-content">
          <article class="boriosa__content column-content">
            <div class="boriosa__logo">
              <img src="./static/img/icon_3.png" alt="vintage logo" />
            </div>
            <h2 class="boriosa__title title">La Boriosa</h2>
            <p class="boriosa__text text text-style">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy
              text ever since the 1500s, when an unknown printer took a galley
              of type and scrambled it to make a type specimen book. It has
              survived.
            </p>
          </article>
          <div class="boriosa__img">
            <img src="./static/img/block2_1.webp" alt="boriosa img" />
          </div>
        </div>
        <div class="boriosa__right">
          <div>
            <img src="./static/img/logo_2.png" alt="boriosa" />
          </div>
        </div>
      </div>
    </div>
    <div class="retro">
      <div class="full-container">
        <div class="retro__left">
          <div>
            <img src="./static/img/logo_3.png" alt="retro" />
          </div>
        </div>
        <div class="retro__center columns-content">
          <article class="retro__content column-content">
            <div class="retro__logo">
              <img src="./static/img/icon_4.png" alt="retro__logo" />
            </div>
            <h2 class="retro__title title">retrò Bike - M. Hulot</h2>
            <p class="retro__text text text-style">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy
              text ever since the 1500s, when an unknown printer took a galley
              of type and scrambled it to make a type specimen book. It has
              survived.
            </p>
          </article>
          <div class="retro__img">
            <img src="./static/img/block3_2.webp" alt="retro__img" />
          </div>
        </div>
        <div class="retro__right"></div>
      </div>
    </div>
    <!-- Slider main container -->
    <section class="swiper">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="swiper__container">
            <div class="swiper__content">
              <div class="swiper__logo">
                <img src="./static/img/icon_1 (1).png" alt="social logo" />
              </div>
              <h3 class="swiper__title title">
                AOD New York @aod <span>/ 35 min</span>
              </h3>
              <p class="swiper__text text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum
                turpis vitae, pretium ante amet.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper__container">
            <div class="swiper__content">
              <div class="swiper__logo">
                <img src="./static/img/icon_1 (1).png" alt="social logo" />
              </div>
              <h3 class="swiper__title title">
                AOD New York @aod <span>/ 35 min</span>
              </h3>
              <p class="swiper__text text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum
                turpis vitae, pretium ante amet.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper__container">
            <div class="swiper__content">
              <div class="swiper__logo">
                <img src="./static/img/icon_1 (1).png" alt="social logo" />
              </div>
              <h3 class="swiper__title title">
                AOD New York @aod <span>/ 35 min</span>
              </h3>
              <p class="swiper__text text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum
                turpis vitae, pretium ante amet.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- pagination -->
      <div class="swiper-pagination"></div>
    </section>
    <div class="grid">
      <div class="show-grid">
        <div class="grid-element grid__1">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__2">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#"><span class="grid__span">Shop now</span></a></div>
          </div>
        </div>
        <div class="grid-element grid__3">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__4">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__5">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__6">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__7">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#">
                <Shop class="grid__span">Shop now</span>
              </a></div>
          </div>
        </div>
        <div class="grid-element grid__8">
          <div class="grid__content">
            <div class="grid__logo"><img src="./static/img/logo_4.png" alt="logo shop"></div>
            <div class="grid__title"><a href="#"><span class="grid__span">Shop now</span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="discover">
      <div class="discover__btn">
        <a href="#">DISCOVER THE SHOP</a>
      </div>
    </div>
    <div class="email">
      <div class="email__img">
        <img src="./static/img/logo.png" alt="Logo store">
      </div>
      <div class="email__title">Stay on the saddle!</div>
      <form action="#" class="email__form">
        <input class="email__input" type="email" placeholder="enter your email...">
        <button type="submit" class="email__btn">GO</button>
      </form>
    </div>
  </main>
  <?php get_footer(); ?>
