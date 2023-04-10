<?php
/* Smarty version 3.1.39, created on 2023-04-10 16:41:32
  from 'C:\xampp\htdocs\toDoList\templates\showRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6434201c36b363_64272657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c7fbb79486bcd7a305869f48342505b0524915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\showRegister.tpl',
      1 => 1681136733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_6434201c36b363_64272657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">REGISTRATE</h2>
            <form  action="register" method="POST" enctype="multipart/form-data">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre"  name="nombre_usuario" required>
  <label for="floatingPassword">Nombre de usuario</label>
</div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Apellido" name="nickname" required>
                <label for="floatingPassword">Apodo</label>
              </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-floating">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Email" name="correo" required>
              <label for="floatingPassword">Email</label>
            </div>

              <!-- Password input -->
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>

        

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
               Registrate
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Ya tenes cuenta ? ingresa haciendo click <a href="/toDoList/login">aqui</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 contenedor-img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHqVPZim6xl5Cn2JRb92NR8QGo6ApK-SDEPQ&usqp=CAU" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
