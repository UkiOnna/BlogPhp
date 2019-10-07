<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-07 15:59:20
  from 'C:\OSPanel\domains\php.blog\app\Views\Admin\Categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d9b36a8acd671_44864621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2a1ba0d785f74ec5521822f15e10cad29ef01e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\Admin\\Categories.tpl',
      1 => 1570113711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/Blocks/Header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d9b36a8acd671_44864621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Admin/Blocks/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Create category</a>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>

        <div class="card card-body mb-3 d-flex flex-row allign-content-start justify-content-start">
            <div>
                <div class="mb-1">
                    <h3><a href="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"></a> <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h3></div>
            </div>
            <div class="btn-group btn-group-sm ml-auto mb-auto">
                <a href="/admin/categories/update/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="btn btn-secondary">
                    Change
                </a>

                <a href="/admin/categories/delete/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
