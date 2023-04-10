{include file='templates/usoComun/header.tpl'}

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


{include file="templates/usoComun/footer.tpl"}