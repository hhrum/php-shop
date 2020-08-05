</html><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}/public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{$url}/public/font-awesome/css/font-awesome.min.css">
    <title>{$title}</title>
</head>
<body>
    
    <div class="header container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-2 order-1">
                <a href="{$url}" class="header__logo header-link">
                    <i class="header__icon fa fa-slack fa-2x" aria-hidden="true"></i>
                    <p>Мой магазинчик</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-2 order-3 order-lg-2">
                <div class="d-none d-md-flex header__categories dropdown">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    <a href="#" class="dropdown-toggle header-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Категории
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$categories item=category name=categories}

                        <a class="dropdown-item header-link" href="{$url}/main/category/?category_id={$category.id}">
                            <i class="fa fa-{$category.icon} header__icon" aria-hidden="true"></i> {$category.name}
                        </a>

                        {/foreach}
                    </div>
                </div>
                <div class="d-block d-md-none header__categories dropdown">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    <a class="header-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Категории
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 order-2 order-lg-3">
                <div class="header__search">
                    <i class="header__search-icon fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Я ищу...">
                </div>
            </div>
            <div class="d-none d-md-flex col-2 col-m-3 col-md-2 order-4">
                <div class="header__order">
                    <i class="header__icon fa fa-shopping-cart" aria-hidden="true">
                        <span class="header__order-count">2</span>
                    </i>
                    <a href="#" class="header-link">Корзина</a>
                </div>
            </div>
            <div class="d-none d-md-flex col-2 col-m-3 col-md-2 order-5">
                <div class="header__account">
                    <a href="#" class="standart-btn" data-toggle="modal" data-target="#signinModal">
                        Войти
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-block d-md-none col-12">
                <div class="collapse header__categories-collapse" id="collapseExample">

                    {foreach from=$categories item=category name=categories}

                    <a class="dropdown-item header__categories-collapse-item" href="{$url}/main/category/?category_id={$category.id}">
                        <i class="fa fa-{$category.icon} header__icon" aria-hidden="true"></i> {$category.name}
                    </a>

                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    {include file="$tpl_name"}

    <footer class="container">
        Footer
    </footer>

    <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal__form">
                    <input type="text" name="email" placeholder="Введите ваш Email">
                    <input type="password" name="password" placeholder="Введите ваш пароль">
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-btn standart-btn">Войти</a>
                <a href="#" class="login-modal__signup" data-dismiss="modal"  data-toggle="modal" data-target="#signupModal">Зарегистрироваться</a>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal__form">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="email" placeholder="Введите ваш Email">
                    <input type="password" name="password1" placeholder="Пароль">
                    <input type="password" name="password2" placeholder="Пароль повторно">
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-btn standart-btn">Создать аккаунт</a>
            </div>
          </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>