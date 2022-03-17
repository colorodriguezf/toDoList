<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:25:23
  from 'C:\xampp\htdocs\TPEweb2\templates\acount\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebbd3dcac68_01691845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e25044e5c8b7e9cbd15aebf54e78c35734d259' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\acount\\user.tpl',
      1 => 1637791578,
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
function content_619ebbd3dcac68_01691845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="h2iniciarSesion"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<div class="contenedorIngresar">
    <div class="row mt-4 containerUser">
        <div class="col-md-4 ">
            <form class="form-alta" action="verify" method="POST">
                <input placeholder="Correo electronico" type="text" name="email" id="email" required>
                <input placeholder="Contraseña" type="password" name="password" id="password" required>
                <h5 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h5>
                <input type="submit" class="submitUser btn-primary " value="Login">
            </form>

            <p class="noCuenta">No tienes cuenta ? click <span><a href="register">AQUÍ</a></span> para registrarte</p>
        </div>
    </div>
    <div>
        <img src="img/diego.jpg" class="img-diego">
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
