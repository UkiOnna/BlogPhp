<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:28:36
  from 'C:\OSPanel\domains\php.blog\app\Views\admin\blocks\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d960594837491_43545224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57bb226fbe614ef07562166eea061565d0f5bf3d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\php.blog\\app\\Views\\admin\\blocks\\Navbar.tpl',
      1 => 1570112914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d960594837491_43545224 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="mb-3 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['g']->value['site_name'];?>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
