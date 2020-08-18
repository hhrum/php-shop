<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 11:57:18
  from 'C:\IT\xampp\htdocs\php-shop\application\views\order\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3ba5feccbeb8_19741307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c22aa692f8bf510c9043ba539ff02040fa5017' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\order\\index.tpl',
      1 => 1597744638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ba5feccbeb8_19741307 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            <?php if (count($_smarty_tpl->tpl_vars['orders']->value) == 0) {?>
    
                <div class="col-12 d-flex basket-empty">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <h3>Ваш список заказов пуст, вы ещё ничего не заказали!</h3>
                </div>
    
            <?php } else { ?>
    
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order', false, 'key');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                    <div class="user-order standart-block row mb-3 mr-1 mr-md-0 ml-1 ml-md-0">
                        <div class="col-12 col-md-3 order-md-1 d-flex justify-content-center mt-2 mt-md-0 mb-3 mb-md-0">
                            <div class="user-order__images">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['products'], 'product', false, 'key', 'products', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'] : null) == 3) {?> <?php break 1;?> <?php }?>
            
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/img/not_image.svg" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 d-flex flex-column justify-content-center">
                            <header>
                                <h5>Идентификатор заказа: <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h5>
                            </header>
                            <div>
                                <p>Дата заказа: <?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</p>
                                <p>Статус заказа: <?php echo $_smarty_tpl->tpl_vars['order']->value['state'];?>
</p>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
            <?php }?>


        </div>
    </div>
</main><?php }
}
