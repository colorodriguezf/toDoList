<?php
/* Smarty version 3.1.39, created on 2021-11-26 13:42:43
  from 'C:\xampp\htdocs\TPEweb2\templates\acount\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a0d6439e53a5_89221448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c636ceab9b9f4c22dd8696efc9066b7c67a80f09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\acount\\register.tpl',
      1 => 1637791574,
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
function content_61a0d6439e53a5_89221448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="h2iniciarSesion"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<div class="containerUser">
    <div class="row mt-4">
        <div class="col-md-4">
            <form class="form-alta" action="insertRegister" method="POST" enctype="multipart/form-data">
                <input placeholder="Nombre" type="text" name="nombre" id="nombre" required>
                <input placeholder="Apellido" type="text" name="apellido" id="apellido" required>
                <input placeholder="Nombre de usuario" type="text" name="nombre_usuario" id="nombre_usuario" required>
                <input placeholder="Correo electronico" type="text" name="email" id="email" required>
                <input placeholder="Contraseña" type="password" name="password" id="password" required>
                <input type="file" name="input_name" id=fotoPerfil>
                <input type="submit" class="btn btn-primary submitRegister" value="Crear cuenta">
            </form>
        </div>
    </div>
    <div>
        <img src="img/messi.jpeg" class="img-messi">
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
