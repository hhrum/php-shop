<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-15 20:31:32
  from 'C:\IT\xampp\htdocs\php-shop\application\views\main\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f382a048191c4_50643822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2de71b50e0a00959b94627b04aeee1160082242' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\main\\category.tpl',
      1 => 1597516291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f382a048191c4_50643822 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container category-block">
    <h3 class="category-block__title">
        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
 (<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
)
    </h3>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="category-searcher standart-block">
                <input type="text" class="category-searcher__input" placeholder="Поиск по категории">
                <a href="#" class="category-searcher__close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <a href="#" class="category-searcher__search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            </div>
            <div class="filters standart-block">
                Фильтры
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <?php if (count($_smarty_tpl->tpl_vars['products']->value) != 0) {?>
            <div class="products">
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <div class="product standart-block">
                    <div class="row">
                        <div class="col-4 col-md-3 product__image">
                            <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-8 col-md-9 product__other">
                            <div class="row">
                                <div class="col-12 col-md-8 justify-content-start">
                                    <div class="product__info">
                                        <div class="product__name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
                                        <div class="product__rating">4.6</div>
                                        <div class="product__reviews">1 обзор</div>
                                    </div>
                                </div>
                                <?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['basket']->value)) {?>
                                
                                <?php } else { ?>
                                <div class="col-12 col-md-4 product__buy-section">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/basket/add/?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="product__buy-btn">
                                        <p class="product__price">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

                                        </p>
                                        <p class="product__buy-text">
                                            Купить
                                        </p>
                                    </a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php } else { ?>
                <h2>Товаров этой категории ещё нет</h2>
            <?php }?>                
        </div>
    </div>
</main><?php }
}
