<?php
/* Smarty version 3.1.39, created on 2023-04-10 16:26:48
  from 'C:\xampp\htdocs\toDoList\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64341ca8bfda55_98486186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f15294987289ded477180e64701cba71b32d847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\showLogin.tpl',
      1 => 1681136807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_64341ca8bfda55_98486186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class=" text-center text-lg-start">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
    <div class="col-lg-4 d-none d-lg-flex">
    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
    </div>
    <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

        <h1 class="font-weight-bold">Iniciar sesion</h1>
        <form action="verify" method="POST" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre de usuario" name="usuario">
              <label for="floatingPassword">Nombre de usuario</label>
            </div>

            <!-- Password input -->
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
              <label for="floatingPassword">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <!-- Submit button -->
            <button class="btn btn-primary btn-block mb-4">Sign in</button>
            <p>No tienes cuenta? <a href="/toDoList/register">Registrate</a></p
          </form>

        </div>
      </div>
    </div>
  </div>
</section>


<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
