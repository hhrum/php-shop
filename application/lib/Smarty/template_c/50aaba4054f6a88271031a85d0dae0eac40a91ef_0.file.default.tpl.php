<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-07 23:08:24
  from 'C:\IT\xampp\htdocs\php-shop\application\views\layouts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2dc2c82749a7_14331464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50aaba4054f6a88271031a85d0dae0eac40a91ef' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\layouts\\default.tpl',
      1 => 1596834501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2dc2c82749a7_14331464 (Smarty_Internal_Template $_smarty_tpl) {
?></html><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/font-awesome/css/font-awesome.min.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    
    <div class="header container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-2 order-1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="header__logo header-link">
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
                    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>

                        <a class="dropdown-item header-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main/category/?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                            <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
 header__icon" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                        </a>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                <div class="d-block d-md-none header__categories dropdown">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    <a class="header-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Категории
                    </a>
                </div>
                <?php }?>

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
                        <?php if (count($_smarty_tpl->tpl_vars['order']->value) != 0) {?><span class="header__order-count"><?php echo count($_smarty_tpl->tpl_vars['order']->value);?>
</span><?php }?>
                    </i>
                    <a href="#" class="header-link">Корзина</a>
                </div>
            </div>
            <div class="d-none d-md-flex col-2 col-m-3 col-md-2 order-5">
                <div class="header__account">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                    <div class="header__account-name">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

                        <div class="account-menu">
                            <div class="account-menu__header">
                                <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

                            </div>
                            <div class="account-menu__body">
                                <a href="#" class="account-menu__item header-link">Заказы</a>
                                <a href="#" class="account-menu__item header-link">Контакты</a>
                                <a href="#" class="account-menu__item header-link">Помощь</a>
                            </div>
                            <div class="account-menu__footer">
                                <a href="#" class="account-menu__item header-link">Настройки профиля</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/profile/signout" class="account-menu__item header-link">Выход</a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <a href="#" class="standart-btn" data-toggle="modal" data-target="#signinModal">
                        Войти
                    </a>    
                    <?php }?>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <div class="row">
            <div class="d-block d-md-none col-12">
                <div class="collapse header__categories-collapse" id="collapseExample">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>

                    <a class="dropdown-item header__categories-collapse-item" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main/category/?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
 header__icon" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                    </a>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <footer>
        <div class="container">
            Footer
        </div>
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
                <div class="modal__form-error" id="signin-error"></div>
                <form class="modal__form" id="signin-form">
                    <input type="text" name="email" placeholder="Введите ваш Email">
                    <input type="password" name="password" placeholder="Введите ваш пароль">
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-btn standart-btn" id="signin-btn">Войти</a>
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
                <div class="modal__form-error" id="signup-error"></div>
                <form class="modal__form" id="signup-form">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="email" placeholder="Введите ваш Email">
                    <input type="password" name="password1" placeholder="Пароль">
                    <input type="password" name="password2" placeholder="Пароль повторно">
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-btn standart-btn" id="signup-btn">Создать аккаунт</a>
            </div>
          </div>
        </div>
    </div>

    <div class="d-flex d-md-none bottom-nav">
        <div class="bottom-nav__container">
            <a href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == "main") {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['url']->value;
}?>" 
                class="bottom-nav__item <?php if ($_smarty_tpl->tpl_vars['controller']->value == "main") {?> bottom-nav__item--accent <?php }?>">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <a href="#" class="bottom-nav__item">
                <i class="fa fa-shopping-cart" aria-hidden="true">
                    
                </i>
            </a>
            <a href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == "profile") {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['url']->value;?>
/profile/menu<?php }?>" 
                class="bottom-nav__item <?php if ($_smarty_tpl->tpl_vars['controller']->value == "profile") {?> bottom-nav__item--accent <?php }?>">
                <i class="fa fa-user" aria-hidden="true">
                    
                </i>
            </a>
            
        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/scripts/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
