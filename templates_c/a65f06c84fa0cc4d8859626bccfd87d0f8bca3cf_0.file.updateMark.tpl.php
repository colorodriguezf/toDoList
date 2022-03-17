<?php
/* Smarty version 3.1.39, created on 2021-11-17 21:03:50
  from 'C:\xampp\htdocs\TPEweb2\templates\form\updateMark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619560267a2975_49895828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65f06c84fa0cc4d8859626bccfd87d0f8bca3cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\form\\updateMark.tpl',
      1 => 1636738595,
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
function content_619560267a2975_49895828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['logueado']->value)) {?>
            <h2 class="agregarBotin">MODIFICAR MARCA:</h2>
<div class="col-md-4 formAgregarBotin">
            <form class="form-alta" action="insertUpdateMark" method="POST"> 
              <label><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
 pasara a llamarse :</label> 
            <input type="text" class="form-" name="renameMark">
            <input type="submit">
            <input type="text" name="id_marca" value="<?php echo $_smarty_tpl->tpl_vars['id_marca']->value;?>
" hidden>
              </form>
                     
                         
                   
                     
</div>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
