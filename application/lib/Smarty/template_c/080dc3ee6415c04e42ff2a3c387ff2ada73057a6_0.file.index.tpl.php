<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-01 01:45:04
  from 'F:\IT\xampp\htdocs\php-shop\application\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f24ad006bca04_67739063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080dc3ee6415c04e42ff2a3c387ff2ada73057a6' => 
    array (
      0 => 'F:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\index.tpl',
      1 => 1596239062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f24ad006bca04_67739063 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <title>Мой магазинчик</title>
</head>
<body>
    
    <div class="header container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-2 order-1">
                <div class="header__logo">
                    <i class="header__icon fa fa-slack fa-2x" aria-hidden="true"></i>
                    <p>Мой магазинчик</p>
                </div>
            </div>
            <div class="col-6 col-lg-2 order-3 order-lg-2">
                <div class="header__categories">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    Категории
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 order-2 order-lg-3">
                <div class="header__search">
                    <i class="header__search-icon fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Я ищу...">
                </div>
            </div>
            <div class="col-3 col-md-2 order-4">
                <div class="header__contacts">Контакты</div>
            </div>
            <div class="col-3 col-md-2 order-5">
                <div class="header__help">Помощь</div>
            </div>
        </div>
    </div>

    <main class="container">
        <div class="hot-news">
            <div class="hot-new__title">Title</div>
            <div class="hot-news__description">Description of news</div>
            <div class="hot-news__nav">
                <div class="hot-news_nav-item hot-news_nav-item_selected"></div>
                <div class="hot-news_nav-item"></div>
                <div class="hot-news_nav-item"></div>
            </div>
        </div>

        <div class="categories">
            <div class="categories__header">
                <div class="categories__title">Категории</div>
                <div class="categories__show-all">Смотреть все</div>
            </div>

            <div class="categories__main">
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
                <div class="category">
                    <div class="category__icon">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="category__title">ПК</div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container">
        Footer
    </footer>
    
</body>
</html><?php }
}
