<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-01 09:12:39
  from 'F:\IT\xampp\htdocs\php-shop\application\views\main\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2515e7ed3014_52988125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33626ab78a8d41c0cbb692af3637fb600297f67' => 
    array (
      0 => 'F:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\main\\index.tpl',
      1 => 1596265959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2515e7ed3014_52988125 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hot-news">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>

        <div class="category">
            <div class="category__icon">
                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['category']->value->getIcon();?>
 fa-2x" aria-hidden="true"></i>
            </div>
            <div class="category__title"><?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
</div>
        </div>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </div>
</div><?php }
}
