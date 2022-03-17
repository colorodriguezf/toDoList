<?php
/* Smarty version 3.1.39, created on 2022-01-13 16:40:45
  from 'C:\xampp\htdocs\Instagram\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e047fd8ae3f9_66968796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1402230ee083855b4cc888addcba668d8d55af3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Instagram\\templates\\formRegister.tpl',
      1 => 1641837952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
  ),
),false)) {
function content_61e047fd8ae3f9_66968796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="registro">
    <h2>Instagram</h2>
    <p class="msg-registrate">Regístrate para ver fotos y videos de tus amigos.</p>
    <form class="formRegistro" action="login" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" placeholder="Correo electronico" name="correo" required>
                </div>
                <div>
                    <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
                </div>
                <div>
                    <input type="text" placeholder="Nombre" name="nombre" required>
                </div>
                <div>
                    <input type="text" placeholder="Apellido" name="apellido" required>
                </div>
                <div>
                    <input type="text" placeholder="Apodo" name="nickname" required>
                </div>
                <div>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <div>
                    <input type="file" name="input_name" id="imageToUpload" name="foto_perfil" required>
                </div>
                <button type="submit"class=iniciarSesion>Registrarme </button>
                <div class="noTenesCuenta">
                <p>¿Ya tienes cuenta? <a href="">Iniciar Sesion</a></p>
        </form>
    </div>
</div><?php }
}
