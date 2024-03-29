<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 16:45:18
  from 'C:\OSPanel\domains\php.blog\app\Views\Admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d95fb6e4d4b21_98928738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9442a789648de17671766c1f9b8ca4ef69ebaff' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\Admin\\login.tpl',
      1 => 1570110312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/Head.tpl' => 1,
    'file:Global/Footer.tpl' => 1,
  ),
),false)) {
function content_5d95fb6e4d4b21_98928738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container py-3">

   <div class="row">
       <div class="col-12 col-lg-4 offset-lg-4">

           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value['flashes'], 'flash');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flash']->value) {
?>
               <div class="mb-3 alert alert-<?php echo $_smarty_tpl->tpl_vars['flash']->value['type'];?>
">
                   <?php echo $_smarty_tpl->tpl_vars['flash']->value['message'];?>

               </div>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           <form action="/login", method="post">

               <h3 class="mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

               <div class="form-group">
                   <input name="username" type="text" class="form-control" placeholder="Login">
               </div>
               <div class="form-group">
                   <input name="password" type="password" class="form-control" placeholder="Password">
               </div>

               <div class="form-group m-0">
                   <button class="btn btn-primary" type="submit">
                       Enter
                   </button>
               </div>

           </form>
       </div>
   </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:Global/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
