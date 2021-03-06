<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-17 14:57:15
  from 'C:\IT\xampp\htdocs\php-shop\application\views\basket\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3a7eabbd9e38_72211749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851ca50b050ba55ae8333ab5183f355ff5219995' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\basket\\index.tpl',
      1 => 1597668927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3a7eabbd9e38_72211749 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container order-block">
    <div class="row" style="flex-grow: 1;">
        <?php if (count($_smarty_tpl->tpl_vars['basket']->value) == 0) {?>
            <div class="col-12 d-flex basket-empty">
                <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                <h3>Ваша корзина пуста, вы ещё ничего сюда не добавили!</h3>
            </div>
        <?php } else { ?>
            <div class="col-12 col-lg-4 order-1 d-flex justify-content-center">
                <div class="basket__info">
                    <div class="basket__item">Всего товаров: <?php echo count($_smarty_tpl->tpl_vars['basket']->value);?>
</div>
                    <div class="basket__item">Общая стоимость: </div>
                    <div class="basket__item">Примерное время доставки: </div>
                    <div class="basket__buy-btn">
                        <a href="#" class="standart-btn" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?> data-target="#buyModal" <?php } else { ?> data-target="#signinModal" <?php }?> data-toggle="modal" id="basket-buy">
                            49 999р
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 ">
                <div class="products">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['basket']->value, 'product', false, 'product_key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        
                        <div class="product standart-block">
                            <div class="row">
                                <div class="col-4 col-md-3 product__image">
                                    <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                                </div>
                                <div class="col-8 col-md-9 product__other">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <div class="product__info">
                                                <div class="product__name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
                                                <div class="product__rating">4.6</div>
                                                <div class="product__reviews">1 обзор</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 product__buy-section justify-content-md-end">
                                            <div class="d-md-none product__price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</div>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/basket/remove/?product_key=" data-product-key="<?php echo $_smarty_tpl->tpl_vars['product_key']->value;?>
" class="product__close-btn">
                                                <i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Купить</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Вы действительно хотите купить добавленные в корзину товары?
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="modal-btn standart-btn" id="buy-btn">ДА, купить</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</main>

<?php echo '<script'; ?>
>
    var basket = JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['basket']->value);?>
');
<?php echo '</script'; ?>
>
<?php }
}
