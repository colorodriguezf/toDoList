<?php
/* Smarty version 3.1.39, created on 2023-04-10 15:50:47
  from 'C:\xampp\htdocs\toDoList\templates\showLoginORRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_643414374b5297_83669630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ce5d5ed9e67ad3b1f2af0c2e1c01d314e5b9d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\showLoginORRegister.tpl',
      1 => 1681134636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_643414374b5297_83669630 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre">
  <label for="floatingPassword">Nombre</label>
</div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Apellido">
                <label for="floatingPassword">Apellido</label>
              </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-floating">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Email">
              <label for="floatingPassword">Email</label>
            </div>

              <!-- Password input -->
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

        

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
               Registrate
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Ya tenes cuenta ? ingresa haciendo click <a hrfe="/a">aqui</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 contenedor-img">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

<section class=" text-center text-lg-start">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
