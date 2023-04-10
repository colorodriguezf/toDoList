{include file='templates/usoComun/header.tpl'}
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

{include file="templates/usoComun/footer.tpl"}