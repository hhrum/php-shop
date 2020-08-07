<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-07 12:58:52
  from 'C:\IT\xampp\htdocs\php-shop\application\views\main\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2d33ecf02367_09694667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b790c8915647845b0138d003039ec5e728a5d78' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\main\\index.tpl',
      1 => 1596797897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2d33ecf02367_09694667 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
        <div id="carouselExampleIndicators" class="carousel slide hot-news" data-ride="carousel">
            <ol class="carousel-indicators hot-news__nav">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="hot-news_nav-item active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="hot-news_nav-item"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="hot-news_nav-item"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active hot-news__content">
                    <div class="hot-new__title">Первый слайд</div>
                    <div class="hot-news__description">Description of news</div>
                </div>
                <div class="carousel-item hot-news__content">
                    <div class="hot-new__title">2 слайд</div>
                    <div class="hot-news__description">Катаемся</div>
                </div>
                <div class="carousel-item hot-news__content">
                    <div class="hot-new__title">Title</div>
                    <div class="hot-news__description">Хуебондим, ае</div>
                </div>
            </div>
        </div>

    <div class="categories">
        <div class="categories__header">
            <div class="categories__title">Категории</div>
            <div class="categories__show-all">Смотреть все</div>
        </div>

        <div class="categories__main">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'] : null) == 8) {?>
                <?php break 1;?>
            <?php }?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main/category/?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="category">
                <div class="category__icon">
                    <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
 fa-2x" aria-hidden="true"></i>
                </div>
                <div class="category__title"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</div>
            </a>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </div>
    </div>
</main><?php }
}
