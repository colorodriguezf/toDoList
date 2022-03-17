<?php
/* Smarty version 3.1.39, created on 2022-01-05 23:38:07
  from 'C:\xampp\htdocs\Instagram\templates\showLoginORRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d61dcf802872_92821371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b8166d6d816c30f79d752219dd89f542de038e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Instagram\\templates\\showLoginORRegister.tpl',
      1 => 1641422222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
  ),
),false)) {
function content_61d61dcf802872_92821371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article>
    <div class="img-default">
        <img class="img-showLoginORRegister" src="img/showLoginORRegister.jpg" />
    </div>
    <div class="usuarioOcontraseña">
    <h2 class="instagramTitulo">Instagram</h2>
    <form  class="userycontraseña" action="verify" method="POST">
    <h5 class="alert-danger errorLogin"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h5>
                <div>
                    <input type="text" placeholder="Usuario" name="usuario">
                </div>
                <div>
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
            <button class=iniciarSesion>Iniciar sesion </button>
        </form>
        <div class="noTenesCuenta">
            <p>¿No tienes cuenta? <a href="registrate">Registrarte</a></p>
        </div>
    </div>
    
</article><?php }
}
