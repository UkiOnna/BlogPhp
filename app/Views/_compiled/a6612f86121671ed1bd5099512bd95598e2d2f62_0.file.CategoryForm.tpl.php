<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:18:16
  from 'C:\OSPanel\domains\php.blog\app\Views\Admin\Forms\CategoryForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d960328dd9dd1_62652065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6612f86121671ed1bd5099512bd95598e2d2f62' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\Admin\\Forms\\CategoryForm.tpl',
      1 => 1570112292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/Blocks/Header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d960328dd9dd1_62652065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Admin/Blocks/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form action="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" required>
        </div>

        <input type="text" hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">

        <button class="btn btn-primary" type="submit">Submit</button>

    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
