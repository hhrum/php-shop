<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 11:56:29
  from 'C:\IT\xampp\htdocs\php-shop\application\views\profile\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3ba5cdc1f6b1_37276905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53e7be5a573932cce6c8cabaa0d235c4d7020f63' => 
    array (
      0 => 'C:\\IT\\xampp\\htdocs\\php-shop\\application\\views\\profile\\menu.tpl',
      1 => 1597744589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ba5cdc1f6b1_37276905 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <div class="profile standart-block">
        <div class="profile__header">
            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
            <div class="profile__avatar">
                <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

            </div>
            <?php } else { ?>
            <a href="#" class="standart-btn" data-toggle="modal" data-target="#signinModal">
                Войти
            </a> 
            <?php }?>
            
        </div>
        <div class="profile__body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order/index" class="profile__item">Заказы</a>
            <a href="#" class="profile__item">Обратная связь</a>
            <a href="#" class="profile__item">Помощь</a>
        </div>
        <div class="profile__footer">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/profile/signout" class="profile__item">Выход</a>
        </div>
    </div>
</main><?php }
}
