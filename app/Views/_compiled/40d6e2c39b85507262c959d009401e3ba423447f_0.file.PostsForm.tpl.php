<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-02 18:34:43
  from 'C:\OSPanel\domains\php.blog\app\Views\Admin\Forms\PostsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d94c3937b0474_51156220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d6e2c39b85507262c959d009401e3ba423447f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\Admin\\Forms\\PostsForm.tpl',
      1 => 1570030483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/Blocks/Header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d94c3937b0474_51156220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Admin/Blocks/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<form action="/admin/posts/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">

    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" required>
    </div>

    <div class="form-group">
        <select name="category_id" class="form-control" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['id'] == $_smarty_tpl->tpl_vars['category']->value['id']) {?>
                    selected
                <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </select>
    </div>

    <div class="form-group">
        <textarea name="content" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
    </div>

    <input type="text" hidden name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
    <input type="text" hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">

    <button class="btn btn-primary" type="submit">Submit</button>

</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
