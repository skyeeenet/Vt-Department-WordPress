<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>
<div class="MAINBOX">
    <header>
        <div class="container-fluid topHeader">
            <div class="container">
                <div class="d-flex flex-column flex-sm-row justify-content-around justify-content-md-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                    <div class="d-flex mb-3 mb-sm-0 flex-column flex-sm-row justify-content-center align-items-center currentWeek">
                        <div>Текущая&nbsp;неделя:&nbsp;</div>
                        <div id="current_week">Четная</div>
                    </div>
                    <!-- /.currentWeek -->
                    <div class="d-flex flex-column flex-md-row justify-content-around align-items-start align-items-md-center contactsTopHeader">
                        <div class="mt-md-0 mt-md-0 ml-3"><img src="./images/placeholder.svg" heigth="20px"
                                                               width="20px" alt="position"><span class="pl-2">Мариуполь</span></div>
                        <div class="mt-2 mt-md-0 ml-3"><img src="./images/email.svg" heigth="20px" width="20px"
                                                            alt="mail"><span class="pl-2">test@gmail.com</span></div>
                        <div class="mt-2 mt-md-0 ml-3">
                            <!--  <img src="images/login.svg" height="20px" width="20px" alt="registration"><a class="btn-reg ml-2 roboto14-standard" href="#">Вход/Регистрация</a> -->
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link profile dropdown-toggle roboto14-standard" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Иванов Иван Иванов
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.contactsTopHeader -->
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light specGreyLine mb-5">
            <div class="container row mr-auto ml-auto no-gutters">
                <div class="col-md-4 col-2">
                    <a class="ml-md-2 ml-0 navbar-brand roboto18" href="/"><img class="mr-3 navbar-logo" src="./images/_ВТ%20new_1551639993.png" alt=""><span class="logo-text">Кафедра информатики</span></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="col-md-8 col-10 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item navbar-logo-text">Кафедра информатики</li>
                        <li class="nav-item active mr-md-3">
                            <a class="nav-link roboto18" href="#">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle roboto18" href="#" id="enrollee" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                абитуриенту
                            </a>
                            <div class="dropdown-menu" aria-labelledby="enrollee">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle roboto18" href="#" id="student" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                студенту
                            </a>
                            <div class="dropdown-menu" aria-labelledby="student">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle roboto18" href="#" id="department" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                кафедра
                            </a>
                            <div class="dropdown-menu" aria-labelledby="department">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link roboto18" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
