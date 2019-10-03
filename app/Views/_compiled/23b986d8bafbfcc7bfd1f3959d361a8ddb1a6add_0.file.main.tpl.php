<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 18:12:09
  from 'C:\OSPanel\domains\php.blog\app\Views\layout\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d960fc9cd0521_07214760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b986d8bafbfcc7bfd1f3959d361a8ddb1a6add' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\layout\\main.tpl',
      1 => 1570115527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/Head.tpl' => 1,
    'file:Global/Navbar.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d960fc9cd0521_07214760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Global/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
