<?php
/* Smarty version 3.1.39, created on 2022-02-09 19:42:58
  from 'C:\xampp\htdocs\Instagram\templates\formCreatePost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62040b32632d29_04624810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e311ef2d5f7bf18fc16f3d4b09d81ac7233786' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Instagram\\templates\\formCreatePost.tpl',
      1 => 1644432078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_62040b32632d29_04624810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="" action="post" method="POST" enctype="multipart/form-data">
<div>
<input type="file" name="input_name"  name="foto_post" required>
</div>
</form>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>

<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
