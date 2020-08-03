<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-03 05:29:03
  from 'F:\IT\xampp\htdocs\php-shop\application\views\layouts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f27847f7b08a9_28029256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56ce4c6ec285e49feae05784ccd04eff9835b6e' => 
    array (
      0 => 'F:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\layouts\\default.tpl',
      1 => 1596425342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27847f7b08a9_28029256 (Smarty_Internal_Template $_smarty_tpl) {
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
" class="header__logo">
                    <i class="header__icon fa fa-slack fa-2x" aria-hidden="true"></i>
                    <p>Мой магазинчик</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-2 order-3 order-lg-2">
                <div class="d-none d-md-flex header__categories dropdown">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    <a href="#" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Категории
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>

                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
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
                <div class="d-block d-md-none header__categories dropdown">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                <div class="header__contacts">Контакты</div>
            </div>
            <div class="d-none d-md-flex col-2 col-m-3 col-md-2 order-5">
                <div class="header__help">Помощь</div>
            </div>
        </div>
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
                    
                    <hr class="header__categories-collapse-seperator">
                    <a class="dropdown-item header__categories-collapse-item" href="#">
                        Контакты
                    </a>
                    <a class="dropdown-item header__categories-collapse-item" href="#">
                        Помощь
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <footer class="container">
        Footer
    </footer>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
