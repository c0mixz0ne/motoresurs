<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
	
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700i" rel="stylesheet">

    <!-- Twenty -->
    <link href="css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="css/twentytwenty.css" rel="stylesheet" type="text/css" />

    <!-- Chartlist -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
	
	<!--JQ UI-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
	
	

    <title>Motoresurs.ru</title>
  </head>
  <body>
  <div class="head_section_wrapper">
    <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6 d-flex">
            <div class="head_contacts_wrapper my-auto">
              <a class="mr-5" href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                +7-913-717-75-75
              </a>
              <a  class="mr-5 d-none d-lg-inline" href="#">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                motoresurs54@mail.ru
              </a>
              <a href="#">
                <i class="fa fa-vk" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-none d-lg-flex">
          <div class="login_wrapper d-flex">
              <a class="my-auto" href="#">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  Вход/Регистрация
              </a>
          </div>
            <div class="search_wrapper d-flex ml-auto">
              <input class="serch_input ml-auto" type="text" placeholder="Поиск">
                <button>
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="buys_wrapper d-flex">
               <a class="my-auto ml-5" href="#">
                 <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
                 В корзине:0
               </a>
            </div>
          </div>
      </div>
    </div>
  </div>

  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light main_nav_color">
      <div class="container">
        <a class="navbar-brand d-flex" href="/">
          <p style="font-family: arial;font-style: italic;font-weight: 800;font-size: 2rem;color: red;" class="navbar_text my-auto">
            Моторесурс
          </p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav d-flex w-100 h-100 justify-content-around">
            <li class="nav-item <?php if (isset($main_active)) {echo $main_active;}?>">
              <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if (isset($catalog_active)) {echo $catalog_active;}?>">
              <a class="nav-link" href="/catalog">Продукция</a>
            </li>
            <li class="nav-item <?php if (isset($where_buy_active)) {echo $where_buy_active;}?>">
              <a class="nav-link" href="/where_buy">Где купить</a>
            </li>
            <li class="nav-item <?php if (isset($technology_active)) {echo $technology_active;}?>">
              <a class="nav-link" href="/technology">Технология</a>
            </li>
            <li class="nav-item <?php if (isset($testing_active)) {echo $testing_active;}?>">
              <a class="nav-link" href="/testing">Испытания</a>
            </li>
<!--             <li class="nav-item">
              <a class="nav-link" href="#">О нас</a>
            </li> -->
            <li class="nav-item <?php if (isset($dileram_active)) {echo $dileram_active;}?>">
              <a class="nav-link" href="/dileram">Ищем дилеров</a>
            </li>
            <li class="nav-item <?php if (isset($articles_active)) {echo $articles_active;}?>">
              <a class="nav-link" href="/articles">Статьи</a>
            </li>
            <li class="nav-item <?php if (isset($contacts_active)) {echo $contacts_active;}?>">
              <a class="nav-link" href="/contacts">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
