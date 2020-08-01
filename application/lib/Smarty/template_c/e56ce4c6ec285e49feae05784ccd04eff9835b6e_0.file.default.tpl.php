<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-01 02:09:38
  from 'F:\IT\xampp\htdocs\php-shop\application\views\layouts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f24b2c2a12863_54983554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56ce4c6ec285e49feae05784ccd04eff9835b6e' => 
    array (
      0 => 'F:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\layouts\\default.tpl',
      1 => 1596240577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f24b2c2a12863_54983554 (Smarty_Internal_Template $_smarty_tpl) {
?></html><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <title><title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title></title>
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
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </main>

    <footer class="container">
        Footer
    </footer>
    
</body>
</html><?php }
}
