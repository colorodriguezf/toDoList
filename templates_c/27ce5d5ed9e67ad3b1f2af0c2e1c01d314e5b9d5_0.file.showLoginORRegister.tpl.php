<?php
/* Smarty version 3.1.39, created on 2022-03-17 16:12:50
  from 'C:\xampp\htdocs\toDoList\templates\showLoginORRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62334ff26fd303_15454965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ce5d5ed9e67ad3b1f2af0c2e1c01d314e5b9d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\showLoginORRegister.tpl',
      1 => 1647529963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_62334ff26fd303_15454965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article>
    <div class="img-default">
        <img class="img-showLoginORRegister" src="img/TO DO LIST.png" />
    </div>
    <div class="usuarioOcontraseña">

    <form  class="userycontraseña" action="verify" method="POST">
                <div class="dataUser">
                    <input type="text" placeholder="Usuario" name="usuario">
                </div>
                <div class="dataUser">
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
                            <button class="iniciarSesion">Iniciar sesion </button>
        </form>
        <div class="noTenesCuenta">
            <div id="registrate" type="button" data-toggle="modal" data-target="#modalRegister"><p>¿No tienes cuenta? Registrate</p></div>
        </div>
            <!-- Modal Register -->
     <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
              <div class="containerModal">
        <form class="formRegistro" action="register" method="POST" enctype="multipart/form-data">
              <div class="mail">
                  <input type="text" placeholder="Correo electronico" name="correo" required>
              </div>
              <div class="usuario">
                  <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
              </div>
              <div class="nickname">
                  <input type="text" placeholder="Apodo" name="nickname" required>
              </div>
              <div class="pass">
                  <input type="password" placeholder="Contraseña" name="password" required>
              </div>
                            <button type="submit"class="iniciarSesion">Registrarme </button>
      </form>
              </div>
             </div>
         </div>
     </div>
 </div>
    </div>
    
</article>



<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
