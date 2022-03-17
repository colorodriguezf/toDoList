<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:18:45
  from 'C:\xampp\htdocs\TPEweb2\templates\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ec855c66507_25585585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fdebe04f7ebdbf7e72fa1b4f6d1472d53dcb6a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\admin\\admin.tpl',
      1 => 1637791584,
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
function content_619ec855c66507_25585585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="tituloUsuarios"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="contenedorUsuarios">
    <?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['logueado']->value == true)) {?>
        <div>
            <ul class="liUsuarios">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                    <li class="usuario">
                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->fotoPerfil) {?>
                            <img class="fotoListaUsuarios" src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->fotoPerfil;?>
 " />
                        <?php } else { ?>
                            <img class="fotoListaUsuarios" src="img/fotosPerfil/sinFotoPerfil.jpg" />
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre_usuario;?>

                        <a class="btn btn-primary btn-sm" href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">Eliminar usuario</a>
                        <a class="btn btn-secondary btn-sm" href="doNormalUser/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">Deshacer admin</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
