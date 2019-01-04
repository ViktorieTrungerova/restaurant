<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="no-index,no-follow">
    <meta name="description" content="Dovolte nám, abychom Vás přivítali v naší restauraci.">
    <meta name="keywords" content="restaurace,rezervace">
    <meta name="author" content="www.viktorietrungerova.cz">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/libs/pogo-slider/pogo-slider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css?v=1.1">


    <title>Restaurant</title>
</head>
<body>
<div class="container-fluid no-padding-left no-padding-right">
    <!--header-->
    <section class="top-area" id="home">
        <div class="top-area__overlay header">

            <div class="header__nav-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 margin-top-small no-padding-right-sm navbar-hidden-item">
                            <ul class="contact-list list-unstyled list-inline">
                                <li class="inline-block">
                                    <a href="mailto:">
                                        <i class="far fa-envelope"></i>
                                        email: info@restaurant.cz
                                    </a>
                                </li>
                                <li class="inline-block margin-left">
                                    <a href="tel:+420123456">
                                        <i class="fas fa-phone"></i>
                                        Telefon: +420 123 456
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-6 no-padding-sm">
                            <ul class="list list-inline pull-right-md">
                                <li class="padding-left padding-right padding-top-small padding-bottom-small inline-block">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="padding-left padding-right padding-top-small padding-bottom-small inline-block">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="padding-left padding-right padding-top-small padding-bottom-small inline-block">
                                    <a  href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                                <li class="inline-block">
                                    <a href="#">
                                        <button type="button" class="btn btn-primary btn--reservation padding-right padding-left">
                                            REZERVACE
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__nav-main">
                <div class="container">
                    <nav class="navbar navbar-expand-xl no-padding-top">
                        <a class="navbar-brand padding-right-big-md" href="#">
                            <img src="images/header/main_logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header__nav-main-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon padding-top-smaller">
                                <i class="fas fa-bars"></i>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse padding-left-bigger-md" id="header__nav-main-collapse">
                            <ul class="navbar-nav mr-0 padding-left-bigger-md margin-top">
                                <li class="nav-item active padding">
                                    <a class="nav-link" href="#" data-scroll_to="#home">DOMŮ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#" data-scroll_to="#about">O NÁS</a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#" data-scroll_to="#offer">NABÍDKA</a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#" data-scroll_to="#menu">MENU</a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#" data-scroll_to="#gallery">GALERIE</a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#" data-scroll_to="#contact">KONTAKT</a>
                                </li>
                                <li class="nav-item padding-top padding-bottom padding-left">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="header__introduction text-center padding-left-big padding-right-big">
                    <div class="pogoSlider navbar-hidden-item">
                        <div class="pogoSlider-slide padding-top-bigger" data-transition="slideOverLeft" data-duration="1000">
                            <h1 class="pogoSlider-slide-element margin-top-bigger padding-top-bigger" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">
                                 Vítejte v<br>Restaurant
                            </h1>
                            <a href="#" data-scroll_to="#book-table">
                                <button type="button" class="btn btn--slider padding-right-big padding-left-big">
                                    REZERVACE
                                </button>
                            </a>
                        </div>
                        <div class="pogoSlider-slide padding-top-bigger" data-transition="fold" data-duration="1000">
                            <h1 class="pogoSlider-slide-element margin-top-bigger margin-bottom-bigger padding-top-bigger" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">
                                Naše Menu
                            </h1>
                            <a href="#" data-scroll_to="#menu">
                                <button type="button" class="btn btn--slider padding-right-big padding-left-big">
                                    DNEŠNÍ MENU
                                </button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--end header-->
    <!--content-->
    <section class="content">
        <div id="about" class="about-us padding-bottom">
            <div class="container">
                    <div class="about-us__wrapper padding padding-bottom-bigger">
                        <h2 class="margin-bottom-big padding-top">
                            O nás
                        </h2>
                        <div class="row">
                            <div class="col- col-sm-6">
                                <p>
                                    <span class="big-text">Q</span>
                                    uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    Suspendisse sagittis ultrices augue. Aliquam ornare wisi eu metus. Nunc auctor. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.
                                    Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.
                                </p>
                            </div>
                            <div class="col- col-sm-6">
                                <p>
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    Suspendisse sagittis ultrices augue. Aliquam ornare wisi eu metus. Nunc auctor. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.
                                    Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
        <div id="offer" class="offer">
            <div class="offer__overlay padding-top-bigger padding-bottom">
                <div class="container">
                        <h2 class="margin-bottom-big padding-top">
                            Speciální balíček
                        </h2>
                        <div class="row">
                            <div class="col- col-sm-6">
                                <img data-src="images/content/photo-97.jpeg" alt="">
                            </div>
                            <div class="col- col-sm-6">
                                <div class="offer-special-package-detail no-margin padding-big padding-top-bigger">
                                    <h3>
                                        40% sleva na hamburger- jen v Po,Út,St
                                    </h3>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, v
                                        el illum qui dolorem eum fugiat quo voluptas nulla pariatur? Suspendisse sagittis ultrices augue. Aliquam ornare wisi eu metus. Nunc auctor.
                                    </p>
                                    <a href="#">
                                    <button type="button" class="btn btn-primary btn--order padding-right-big padding-left-big">
                                        OBJEDNAT
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div id="menu" class="menu padding-top-bigger padding-bottom">
            <div class="container">
                <h2 class="text-center padding-top">
                    Dnešní Menu
                </h2>
                <div class="menu__buttons text-center margin-top-big">
                <ul class="list-inline list-unstyled">
                    <li class="inline-block margin-right-small">
                        <button type="button" class="btn btn-primary btn--menu active" data-filter="all">
                           VŠE
                        </button>
                    </li>
                    <li class="inline-block margin-right-small">
                            <button type="button" class="btn btn-primary btn--menu" data-filter=".breakfast">
                               SNÍDANĚ
                            </button>
                    </li>
                    <li class="inline-block margin-right-small">
                            <button type="button" class="btn btn-primary btn--menu" data-filter=".lunch">
                               OBĚD
                            </button>
                    </li>
                    <li class="inline-block margin-right-small margin-top-xs">
                            <button type="button" class="btn btn-primary btn--menu" data-filter=".dinner">
                               VEČEŘE
                            </button>
                    </li>
                    <li class="inline-block margin-top-xs">
                            <button type="button" class="btn btn-primary btn--menu" data-filter=".cofee">
                               CAFE
                            </button>
                    </li>
                </ul>
            </div>
                <div class="menu__food-list margin-top-big">
                    <div class="mix-wrapper">
                        <div class="row" >
                            <div class="col- col-sm-6  mix breakfast" data-order="1">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_1.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col- col-sm-6  mix lunch" data-order="2">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_2.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col- col-sm-6  mix dinner" data-order="3">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_3.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col- col-sm-6  mix cofee" data-order="4">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_4.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col- col-sm-6  mix breakfast" data-order="5">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_5.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col- col-sm-6  mix lunch" data-order="6">
                                <div class="menu__image float-left padding-top padding-bottom">
                                    <img data-src="images/content/menu_6.jpg" alt="">
                                </div>
                                <div class="menu__item margin-left-big float-left ">
                                    <h3>
                                        Recept
                                        <span class="menu-price float-right">20.00 Kč</span>
                                    </h3>
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td class="padding-right-big">
                                                -Juice Fruit
                                            </td>
                                            <td class="padding-right-big">
                                                -Checken
                                            </td>
                                            <td class="padding-right-big">
                                                -Cherry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Vegetable
                                            </td>
                                            <td>
                                                -Milk
                                            </td>
                                            <td>
                                                -Potato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                -Tomato
                                            </td>
                                            <td>
                                                -Chilli
                                            </td>
                                            <td>
                                                -Sesame
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="book-table" class="book-table">
            <div class="book-table__overlay text-center padding-bigger">
                <div class="container">
                    <h2 class="padding-big">
                        REZERVUJ SI STŮL !
                    </h2>
                    <a href="#">
                        <button type="button" class="btn btn-primary btn--order padding-right-big padding-left-big">
                            REZERVOVAT
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
        <div id="gallery" class="gallery padding-top-bigger padding-bottom-bigger">
            <div class="container">
                <h2 class="padding-top">
                    Galerie
                </h2>
                <div class="row">
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/7.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 no-padding">
                        <div class="gallery__items">
                            <a href="#">
                                <img data-src="images/content/8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end content-->
    <!--footer-->
    <section id="contact" class="footer">
        <div class="footer__overlay padding-top-bigger padding-bottom-bigger text-center">
            <div class="container">
                <div class="row padding-top-bigger">
                    <div class="col-sm-12">
                        <img data-src="images/header/main_logo.png" alt="">
                    </div>
                    <div class="col-sm-12 margin-top-big">
                        <span>
                            Varhulíkové 123/45, Holešovice, 111 12 Praha 7
                        </span>
                    </div>
                    <div class="col-sm-12 margin-top-big">
                        <span>
                            hello@restaurant.com
                        </span>
                    </div>
                    <div class="col-sm-12 margin-top-big">
                        <span>
                            +420 123 456 789
                        </span>
                    </div>
                    <div class="col-sm-12 margin-top-big">
                      <ul class="list-unstyled list-inline footer-list">
                          <li class="inline-block padding-right">
                              <a href="#">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                          </li>
                          <li class="inline-block padding-right">
                              <a href="#">
                                  <i class="fab fa-skype"></i>
                              </a>
                          </li>
                          <li class="inline-block padding-right">
                              <a href="#">
                                  <i class="fab fa-twitter"></i>
                              </a>
                          </li>
                          <li class="inline-block">
                              <a href="#">
                                  <i class="fab fa-google"></i>
                              </a>
                          </li>
                      </ul>
                    </div>
                </div>
                <div class="back-to-top scrollup padding" style="display: none">
                    <a href="#">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end footer-->

</div>
</body>

<script src="assets/js/jquery.min.js" ></script>
<script src="assets/libs/jquery-unveil/jquery.unveil.js" ></script>
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/nav-main-fixed-top.js" ></script>
<script src="assets/js/mixitup/dist/mixitup.min.js" ></script>
<script src="assets/js/mixItUp.js" ></script>
<script src="assets/js/lazy-loading-img.js" ></script>
<script src="assets/js/scroll-to.js" ></script>
<script src="assets/libs/pogo-slider/jquery.pogo-slider.min.js" ></script>
<script src="assets/js/pogoSlider.js" ></script>
</html>