{include file='templates/usoComun/header.tpl'}
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
                {* <p class="errorLogin">{$error}</p> *}
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
              {* <div class="foto_perfil">
                  <input type="file" name="input_name" id="imageToUpload" name="foto_perfil" required>
              </div> *}
              <button type="submit"class="iniciarSesion">Registrarme </button>
      </form>
              </div>
             </div>
         </div>
     </div>
 </div>
    </div>
    
</article>



{include file="templates/usoComun/footer.tpl"}